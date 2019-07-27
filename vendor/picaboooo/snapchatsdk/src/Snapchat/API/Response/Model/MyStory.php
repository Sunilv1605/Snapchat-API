<?php

namespace Snapchat\API\Response\Model;

class MyStory {

    /**
     * Story
     * @var Story
     */
    private $story;

    /**
     * Story Notes
     * @var StoryNote[]
     */
    private $story_notes;

    /**
     * Story Extras
     * @var StoryExtras
     */
    private $story_extras;

    /**
     * @return Story
     */
    public function getStory()
    {
        return $this->story;
    }

    /**
     * @param Story $story
     */
    public function setStory($story)
    {
        $this->story = $story;
    }

    /**
     * @return StoryNote[]
     */
    public function getStoryNotes()
    {
        return $this->story_notes;
    }

    /**
     * @param StoryNote[] $story_notes
     */
    public function setStoryNotes($story_notes)
    {
        $this->story_notes = $story_notes;
    }

    /**
     * @return StoryExtras
     */
    public function getStoryExtras()
    {
        return $this->story_extras;
    }

    /**
     * @param StoryExtras $story_extras
     */
    public function setStoryExtras($story_extras)
    {
        $this->story_extras = $story_extras;
    }

}