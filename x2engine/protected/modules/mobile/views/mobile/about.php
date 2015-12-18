<?php
/*****************************************************************************************
 * X2Engine Open Source Edition is a customer relationship management program developed by
 * X2Engine, Inc. Copyright (C) 2011-2015 X2Engine Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY X2ENGINE, X2ENGINE DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact X2Engine, Inc. P.O. Box 66752, Scotts Valley,
 * California 95067, USA. or at email address contact@x2engine.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * X2Engine" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by X2Engine".
 *****************************************************************************************/

echo X2Html::logo ('mobile', array (
    'id' => 'about-logo',
));

?>
<div class='mobile-list-view'>
    <div class='list-view-section-title'><?php 
        echo CHtml::encode (Yii::t('mobile', 'Version'));?></div>
    <div class='mobile-list-view-item'>
    <?php
    echo CHtml::encode (Yii::app()->getEditionLabel(true).': '.
        Yii::app()->params->version);
    ?>
    </div>
    <?php
     
    ?>

    <div class='list-view-section-title'><?php 
        echo CHtml::encode (Yii::t('mobile', 'Legal'));?></div>
    <div class='mobile-list-view-item'>
    <?php
    //if (Yii::app()->edition === 'opensource') {
    ?>
    <a href='<?php echo $this->createAbsoluteUrl ('license') ?>/LICENSE.txt'><?php 
        echo CHtml::encode (Yii::t('mobile', 'License')); ?></a>
    <?php
    //} else {
    ?>
    <!--<a href='LICENSE.txt'><?php echo CHtml::encode (Yii::t('mobile', 'License')); ?></a>-->
    <?php
    //}
    ?>
    </div>

    <div class='list-view-section-title'><?php 
        echo CHtml::encode (Yii::t('mobile', 'Headquarters'));?></div>
    <div class='mobile-list-view-item'>
    X2CRM<br>
    501 Mission St. Suite #5<br> 
    Santa Cruz, California 95060<br>
    USA
    </div>

    <div class='list-view-section-title'><?php 
        echo CHtml::encode (Yii::t('mobile', 'Mailing Address'));?></div>
    <div class='mobile-list-view-item'>
    X2Engine Inc.<br>
    PO Box 66752<br>
    Scotts Valley, California 95067<br>
    USA<br>
    </div>

    <div class='list-view-section-title'></div>
    <div class='mobile-list-view-item'>
        <a href='http://www.x2crm.com'><?php 
            echo CHtml::encode (Yii::t('app', 'Powered by {X2Engine}', array (
                '{X2Engine}' => 'X2Engine'
            ))); 
        ?></a><br>
        <?php
            echo CHtml::encode ('Copyright © 2011-'.date('Y').' X2Engine Inc.');
        ?>
    </div>
</div>
