<?php

class Articles 
{
    private int $id_article;
    private string $title;
    private string $text;
    private string $image_article;
    private string $author;
    private string $date_article;

    public function getIdArticle(): int
    {
        return $this->id_article;
    }

    public function getTitleArticle(): string 
    {
        return $this->title;
    }

    public function getTextArticle(): string 
    {
        return $this->text;
    }

    public function getImageArticle(): string 
    {
        return $this->image_article;
    }

    public function getAuthorArticle(): string 
    {
        return $this->author;
    }

    public function getDateArticle(): string 
    {
        return $this->date_article;
    }
}