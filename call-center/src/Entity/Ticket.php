<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=TicketRepository::class)
 */
class Ticket
{
    public const status=[
        "in progress"=>"in progress",
        "open"=>"open",
        "closed"=>"closed",
        "Waiting for customer feedback"=>"Waiting for customer feedback",
        "Won't fix"=>"Won't fix"
    ];
    public const priorities=["low", "medium", "high"];

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $message;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $priority;

    /**
     * @ORM\Column(type="datetime")
     */
    private $posted;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ticket")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="ticket")
     */
    private $comments;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $agentId;

    /**
     * @ORM\Column(type="boolean")
     */
    private $escalated;

    /**
     * @ORM\Column(type="boolean")
     */
    private $reopened;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $wontFix;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $closed;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->setStatus(self::status['open']);
        $this->setPriority("low");
        $this->setPosted(new \DateTime());
        $this->setEscalated(false);
        $this->setReopened(false);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(string $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getPosted(): ?\DateTimeInterface
    {
        return $this->posted;
    }

    public function setPosted(\DateTimeInterface $posted): self
    {
        $this->posted = $posted;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setTicket($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->contains($comment)) {
            $this->comments->removeElement($comment);
            // set the owning side to null (unless already changed)
            if ($comment->getTicket() === $this) {
                $comment->setTicket(null);
            }
        }

        return $this;
    }

    public function getAgentId(): ?int
    {
        return $this->agentId;
    }

    public function setAgentId(?int $agentId): self
    {
        $this->agentId = $agentId;

        return $this;
    }

    public function getEscalated(): ?bool
    {
        return $this->escalated;
    }

    public function setEscalated(bool $escalated): self
    {
        $this->escalated = $escalated;

        return $this;
    }

    public function getReopened(): ?bool
    {
        return $this->reopened;
    }

    public function setReopened(bool $reopened): self
    {
        $this->reopened = $reopened;

        return $this;
    }

    public function getWontFix(): ?string
    {
        return $this->wontFix;
    }

    public function setWontFix(?string $wontFix): self
    {
        $this->wontFix = $wontFix;

        return $this;
    }

    public function getClosed(): ?\DateTimeInterface
    {
        return $this->closed;
    }

    public function setClosed(?\DateTimeInterface $closed): self
    {
        $this->closed = $closed;

        return $this;
    }

    public function canReopen(): bool
    {
        $closedTicket = $this->closed;
        if($closedTicket == NULL){
            return false;
        }
        $interval = $closedTicket->diff(new DateTime());
        if($interval->format('%i') >= 1){
            return true;
        }
        else {
            return false;
        }
    }

    public function canClose(): bool
    {
        if($this->status==Ticket::status['Won\'t fix']){
            return false;
        }

        foreach($this->comments as $comment){
            if ($this->getUser()->getId() !== $comment->getUser()->getId()){
                return true;
            }
        }

        return false;
    }

    public function canComment(User $user): bool
    {
        if (in_array(User::roles["FLA"], $user->getRoles(), true) && $this->getAgentId() == NULL){
            return false;
        }
        else {
            return true;
        }
    }

    public function canView(UserInterface $userInterface, User $user){
        if(in_array(User::roles['MANAGER'], $userInterface->getRoles())){
            return true;
        }elseif(in_array(User::roles['SLA'], $userInterface->getRoles()) and $this->getAgentId() === $user->getId() ){
            return true;
        }elseif (in_array(User::roles['FLA'], $userInterface->getRoles()) and !in_array(User::roles['SLA'], $userInterface->getRoles()) and ($this->getAgentId()===null || $this->getAgentId()===$user->getId())){
            return true;
        }else{
            return false;
        }
    }



}
