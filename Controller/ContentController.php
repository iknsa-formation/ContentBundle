<?php

namespace ContentBundle\Controller;

require_once "src/ContentBundle/Model/Content.php";

class ContentController
{
    public function indexAction()
    {
        foreach ($_SERVER['contents'] as $value) {
            $contents[] = $value;
        }

        foreach ($contents as $value) {
            $content[] = new  \ContentBundle\Model\Content($value);
        }

        return array(
            'template' => 'index',
            'content' => $content
        );
    }

    public function showAction($id)
    {
        foreach ($id as $key => $value) {
            $contentId = $value;
        }

        foreach ($_SERVER['contents'] as $key => $value) {

            if($value["id"] == $contentId) {
                $content = $value;
            }
        }

        $contentObject = new \ContentBundle\Model\Content($content);

        return array(
            'template' => 'show',
            'content' => $contentObject
        );
    }
}
