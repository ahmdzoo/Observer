<?php
class Newsletter
{
    public $subscribers = [];

    public function subscribe($subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    public function unsubscribe($subscriber)
    {
        $key = array_search($subscriber, $this->subscribers);
        if ($key !== false) {
            unset($this->subscribers[$key]);
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