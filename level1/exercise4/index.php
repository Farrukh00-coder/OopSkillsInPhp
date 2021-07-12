<?php

class Article
{
	public string $name;
	public string $content;
	public ?int $ageCategory = null;
	public bool $isImage = false;

	public function __construct(string $name, string $content, ?int $ageCategory = null, bool $isImage = false)
	{
		$this->name = $name;
		$this->content = $content;
		$this->ageCategory = $ageCategory;
		$this->isImage = $isImage;
	}
}

class Censor
{

	// при наличии слова 'корова' в тексте заменяем это слово на 'курицу'
	public function censor(string $text): string
	{
		return str_replace('корова', 'курица', $text);
	}
}

class Publisher
{
	private Censor $censor;

	public function __construct(Censor $censor)
	{
		$this->censor = $censor;
	}

	private function send(string $nameArticle, string $contentArticle, string $publicationChanel)
	{
		echo 'Статья: "' . $nameArticle . '" была опубликована в "' . $publicationChanel . '". ' . $contentArticle;
	}

	public function publish(Article $article)
	{	
		// содержимое статьи
		$content = $article->content;
		
		// если возраст до 18 то проводим цензуру содержимого статьи
		if ($article->ageCategory < 18) {
			$content = $this->censor->censor($article->content);
		}

		// отправляем публикацию в интернет блог
		$this->send($article->name, $content, 'Блог');

		// если у статьи есть картинка то отправляем также в instagram
		if ($article->isImage) {
			$this->send($article->name, $content, 'Instagram');
		}
	}
}



$publisher = new Publisher(new Censor());
$article1 = new Article('Природа', 'Наша корова кушает траву каждый день');
$article2 = new Article('Природа', 'Наша корова кушает траву каждый день', 25);
$article3 = new Article('Природа', 'Наша корова кушает траву каждый день', 17, true);
$publisher->publish($article1);
echo "<br><br>";
$publisher->publish($article2);
echo "<br><br>";
$publisher->publish($article3);