<?php
class Newsletter
{
    private $subscribers = [];
    private $nextId = 1;

    public function subscribe($subscriber)
    {
        $subscriberId = $this->nextId;
        $this->subscribers[$subscriberId] = $subscriber;
        $this->nextId++;
        return $subscriberId;
    }

    public function unsubscribe($subscriberId)
    {
        if (isset($this->subscribers[$subscriberId])) {
            unset($this->subscribers[$subscriberId]);
        }
    }

    public function notifySubscribers($edition)
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($edition);
        }
    }

    public function newEdition($edition)
    {
        echo "New edition published: " . $edition . "<br>";
        $this->notifySubscribers($edition);
    }
}
?>