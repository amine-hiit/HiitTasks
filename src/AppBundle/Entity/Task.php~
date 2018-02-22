<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table(name="task")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 */
class Task
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="duration", type="datetime", nullable=true)
     */
    private $duration;

    /**
     * @var int
     *
     * @ORM\Column(name="task_referential_id", type="integer")
     */
    private $taskReferentialId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set duration.
     *
     * @param \DateTime|null $duration
     *
     * @return Task
     */
    public function setDuration($duration = null)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration.
     *
     * @return \DateTime|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set taskReferentialId.
     *
     * @param int $taskReferentialId
     *
     * @return Task
     */
    public function setTaskReferentialId($taskReferentialId)
    {
        $this->taskReferentialId = $taskReferentialId;

        return $this;
    }

    /**
     * Get taskReferentialId.
     *
     * @return int
     */
    public function getTaskReferentialId()
    {
        return $this->taskReferentialId;
    }

    /**
     * Set comment.
     *
     * @param string|null $comment
     *
     * @return Task
     */
    public function setComment($comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment.
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set userId.
     *
     * @param int $userId
     *
     * @return Task
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
