<?php

/**
 * Class contact
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Contact extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        $categories = $this->model->getProductCategory();
        require APP . 'view/_templates/header.php';
        require APP . 'view/contact/index.php';
        require APP . 'view/_templates/footer.php';
    }

        public function sent()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/contact/sent.php';
        require APP . 'view/_templates/footer.php';
    }
}
