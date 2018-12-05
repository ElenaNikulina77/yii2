<?php
namespace app\controllers;

use yii\web\Controller;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return $this->render("calendar/form-review.php");

    }

    public function actionCreate()
    {
        return $this->render("calendar/form-review.php");
    }

}

public function actionFormReview()
{
    $model = new \app\models\ContactForm();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

    return $this->render('form-review', [
        'model' => $model,
    ]);
}


