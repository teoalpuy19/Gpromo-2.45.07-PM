<?php

class GPromoController extends Controller
{
 
        public function actionIndex()
                {
            $this->layout = 'main';
                $this->render('index');
                }
}