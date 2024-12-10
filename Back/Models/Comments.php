<?php 

class Comments 
{
    private string $text_comment;
    private string $date_comment;
    private string $author_comment;
    private string $article;

    public function getTextComment(): string 
    {
        return $this->text_comment;
    }

    public function getDateComment(): string 
    {
        return $this->date_comment;
    }

    public function getAuthorComment(): string 
    {
        return $this->author_comment;
    }

    public function getArticleComment(): string 
    {
        return $this->article;
    }
}