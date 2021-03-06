<?php

namespace app\modules\bot\controllers\privates;

use app\modules\bot\components\helpers\Emoji;

use Yii;
use app\modules\bot\components\Controller;

/**
 * Class SAdController
 *
 * @package app\modules\bot\controllers
 */
class SAdController extends Controller
{
    /**
     * @return array
     */
    public function actionIndex()
    {
        return $this->getResponseBuilder()($this->getUpdate())
            ->editMessageTextOrSendMessage(
                $this->render('index'),
                [
                    [
                        [
                            'url' => 'https://github.com/opensourcewebsite-org/opensourcewebsite-org/blob/master/DONATE.md',
                            'text' => Yii::t('bot', 'Donate'),
                        ],
                        [
                            'url' => 'https://github.com/opensourcewebsite-org/opensourcewebsite-org/blob/master/CONTRIBUTING.md',
                            'text' => Yii::t('bot', 'Contribution'),
                        ],
                    ],
                    [
                        [
                            'callback_data' => ServicesController::createRoute(),
                            'text' => Emoji::BACK,
                        ],
                    ],
                ]
            )
            ->build();
    }
}
