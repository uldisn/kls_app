<?php


$user = User::model()->findByPk(Yii::app()->user->id);

$this->widget('vendor.uldisn.ace.widgets.TbAceMenu', array(
    'type' => '',
    'stacked' => false, 
    'htmlOptions' => array('class' => 'nav-list'),
    'items' => array(
        array(
            'label' => Yii::t('dbr_app', 'System'),
            'icon' => 'icon-cogs',            
            'visible' => Yii::app()->user->checkAccess('SysAdmin'),
            'submenuOptions' => array('class' => 'multi-level'),
            'items' => array(
                array(
                    'label' => Yii::t('dbr_app', 'Access managment'),
                    'url' => array('/rights'),
                    'visible' => Yii::app()->user->checkAccess('SysAdmin'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Company Custom Fields'),
                    'url' => array('/d2company/cccfCustomField'),
                    'visible' => Yii::app()->user->checkAccess('SysAdmin'),
                ),                
            ),
        ),
        array(
            'label' => Yii::t('dbr_app', 'Administration'),
            'icon' => 'icon-cogs',            
            'visible' => Yii::app()->user->checkAccess('Administrator'),
            'submenuOptions' => array('class' => 'multi-level'),
            'items' => array(

                array(
                    'label' => Yii::t('D2personModule.model', 'Persons Document Types'),
                    'url' => array('/d2person/pdcmDocumentType'),
                    'visible' => false,
                ),
                array(
                    'label' => Yii::t('D2personModule.model', 'Person Types'),
                    'url' => array('/d2person/ptypType'),
                    'visible' => false,
                ),
                array(
                    'label' => Yii::t('D2personModule.model', 'Contact Types'),
                    'url' => array('/d2person/pcntContactType'),
                    'visible' => false,
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Users'),
                    'url' => array('/user/admin'),
                    'visible' => Yii::app()->user->checkAccess('UserAdmin'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Calendar'),
                    'url' => array('/d2calendar/cledCalendarExceptionDates'),
                    //'visible' => Yii::app()->user->checkAccess('UserAdmin'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Termina prices'),
                    'icon' => 'icon-money',
                    'url' => array('/edifactdata/etprTerminalPrices'),
                ),                        
            )
        ),
        array(
            'label' => Yii::t('dbr_app', 'Dashboard'),
            'icon' => 'icon-dashboard',
            'url' => array('/edifactdata/dashboard'),
        ),        
        array(
            'label' => Yii::t('dbr_app', 'Alerts'),
            'icon' => 'icon-warning-sign',
            'url' => array('/edifactdata/ecerErrors'),
        ),           
        array(
            'label' => Yii::t('dbr_app', 'Container movings'),
            'icon' => 'icon-exchange',
            'url' => array('/edifactdata/ecntContainer'),
        ),        
        array(
            'label' => Yii::t('dbr_app', 'Containers'),
            'icon' => 'th-large',
            'url' => array('/edifactdata/ecprContainerProcesing'),
        ),        
        array(
            'label' => Yii::t('dbr_app', 'EDI files'),
            'icon' => 'icon-paperclip',
            'url' => array('/edifactdata/edifact'),
        ),        
    
        array(
            'label' => Yii::t('dbr_app', 'Office'),
            'visible' => false,
            'icon' => 'building',
            'items' => array(
                array(
                    'label' => Yii::t('dbr_app', 'Companies'),
                    'url' => array('/d2company/ccmpCompany'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Persons'),
                    'url' => array('/d2person/pprsPerson'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Countries'),
                    'url' => array('/d2company/ccntCountry'),
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ),
                array(
                    'label' => Yii::t('dbr_app', 'Wiki'),
                    'url' => array('/wiki/default/pageIndex'),
                    'visible' => Yii::app()->user->checkAccess('WikiEditor'),
                ),
            )
        ),
        array(
            'label' => Yii::t('dbr_app', 'Reports'),
            'icon'=>'book',
            'visible' => Yii::app()->user->checkAccess('Reports'),
            'items' => array(
                array(
                    'label' => Yii::t('dbr_app', 'Cyprus'),
                    'url' => array('/edifactdata/Report/cyprus'),
                    'visible' => Yii::app()->user->checkAccess('Reports'),
                ),

            )
        ),
    ),
        )
);
?>
<div class="sidebar-collapse" id="sidebar-collapse">
    <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
</div>

<script type="text/javascript">
    try {
        ace.settings.check('sidebar', 'collapsed')
    } catch (e) {
    }
</script>
