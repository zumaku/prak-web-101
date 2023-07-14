<?php

namespace app\controllers;

use app\models\User;
use Yii;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $user = Yii::$app->user->identity;
        return $this->render('index', [
            'user' => $user,
        ]);
    }

    public function actionEdit()
    {
        $user = new User;
        $data_user = Yii::$app->user->identity;   // data user yang sedang login
        $old_data = User::findOne($data_user->id);
        
        if($user->load($this->request->post())){     // load semua data yang ada di post dan save. redirect ke halaman view?id=...

            $old_data->username = $user->username;
            $old_data->email = $user->email;
            $old_data->password_hash = Yii::$app->getSecurity()->generatePasswordHash($user->password);     // hasing pasword baru
            if( $old_data->save() ){
                return $this->redirect(['index']);
            } else{
                var_dump($mhs->getError());
                die();
            }
        } else{
            $user->loadDefaultValues();
        }

        return $this->render('edit', [
            'model' => $user,
            'data_user' => $data_user,     // mengirim data user ke view
        ]);
    }

}
