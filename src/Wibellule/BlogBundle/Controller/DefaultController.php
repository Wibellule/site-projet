<?php

namespace Wibellule\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Wibellule\BlogBundle\Entity;

class DefaultController extends Controller
{
    public function indexAction($page)
    {
        $repositoryArticle = $this->getDoctrine()->getManager()->getRepository('WibelluleBlogBundle:Articles');
        $articles = $repositoryArticle->getArticlesPaginate(12, $page);
        return $this->render(
            'WibelluleBlogBundle:Default:index.html.twig',
            array(
                'articles' => $articles,
                'nbPerPage' => ceil(count($articles) / 12),
                'page' => $page
            )
        );
    }

    public function detailsArticleAction($url)
    {
        $repositoryArticle = $this->getDoctrine()->getRepository('WibelluleBlogBundle:Articles');
        $article = $repositoryArticle->findOneBy(array('url' => $url));
        return $this->render('WibelluleBlogBundle:Default:detail.html.twig', array('article' => $article));
    }
}
