<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use App\Orm\Repository\BookRepository;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{
	/** @inject */
	public BookRepository $bookRepository;

	public function renderDefault()
	{
		$this->template->books = $this->bookRepository->findAll();
	}
}
