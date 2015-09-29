<?php


$user = User::model()->findByPk(Yii::app()->user->id);

$this->widget('vendor.uldisn.ace.widgets.TbAceMenu', [
    'type' => '',
    'stacked' => false, 
    'htmlOptions' => ['class' => 'nav-list'],
    'items' => [
        [
            'label' => Yii::t('dbr_app', 'System'),
            'icon' => 'icon-cogs',            
            'visible' => Yii::app()->user->checkAccess('SysAdmin'),
            'submenuOptions' => ['class' => 'multi-level'],
            'items' => [
                [
                    'label' => Yii::t('dbr_app', 'Access managment'),
                    'url' => ['/rights'],
                    'visible' => Yii::app()->user->checkAccess('SysAdmin'),
                ],
                [
                    'label' => Yii::t('dbr_app', 'Company Custom Fields'),
                    'url' => ['/d2company/cccfCustomField'],
                    'visible' => Yii::app()->user->checkAccess('SysAdmin'),
                ],                
            ],
        ],
        [
            'label' => Yii::t('dbr_app', 'Administration'),
            'icon' => 'icon-cogs',            
            'visible' => Yii::app()->user->checkAccess('Administrator'),
            'submenuOptions' => ['class' => 'multi-level'],
            'items' => [

                [
                    'label' => Yii::t('D2personModule.model', 'Persons Document Types'),
                    'url' => ['/d2person/pdcmDocumentType'],
                    'visible' => false,
                ],
                [
                    'label' => Yii::t('D2personModule.model', 'Person Types'),
                    'url' => ['/d2person/ptypType'],
                    'visible' => false,
                ],
                [
                    'label' => Yii::t('D2personModule.model', 'Contact Types'),
                    'url' => ['/d2person/pcntContactType'],
                    'visible' => false,
                ],
                [
                    'label' => Yii::t('dbr_app', 'Users'),
                    'url' => ['/user/admin'],
                    'visible' => Yii::app()->user->checkAccess('UserAdmin'),
                ],
                [
                    'label' => Yii::t('D2calendarModule.model', 'Calendar'),
                    'url' => ['/d2calendar/cledCalendarExceptionDates'],
                    //'visible' => Yii::app()->user->checkAccess('UserAdmin'),
                ],
                [
                    'label' => Yii::t('EdifactDataModule.model', 'Terminal Prices'),
                    'icon' => 'icon-money',
                    'url' => ['/edifactdata/etprTerminalPrices'],
                    'visible' => Yii::app()->user->checkAccess('UserAdmin'),
                ],      
                [
                    'label' => Yii::t('LdmModule.model', 'Delivery types'),
                    'url' => ['/ldm/pfDeliveryType'],
                    'visible' => Yii::app()->user->checkAccess('UserAdmin'),                    
                ],      
                
            ]
        ],
        [
            'label' => Yii::t('EdifactDataModule.model', 'Dashboard'),
            'icon' => 'icon-dashboard',
            'url' => ['/edifactdata/dashboard'],
            'visible' => Yii::app()->user->checkAccess('Edifactdata.EcntContainer.Menu'),
        ],        
        [
            'label' => Yii::t('EdifactDataModule.model', 'Alerts'),
            'icon' => 'icon-warning-sign',
            'url' => ['/edifactdata/ecerErrors'],
            'visible' => Yii::app()->user->checkAccess('Edifactdata.EcntContainer.Menu'),
        ],           
        [
            'label' => Yii::t('EdifactDataModule.model', 'Containers Moving'),
            'icon' => 'icon-exchange',
            'url' => ['/edifactdata/ecntContainer'],
            'visible' => Yii::app()->user->checkAccess('Edifactdata.EcntContainer.Menu'),
        ],        
        [
            'label' => Yii::t('EdifactDataModule.model', 'Containers'),
            'icon' => 'th-large',
            'url' => ['/edifactdata/ecprContainerProcesing'],
            'visible' => Yii::app()->user->checkAccess('Edifactdata.EcntContainer.Menu'),
        ],        
        [
            'label' => Yii::t('EdifactDataModule.model', 'EDI files'),
            'icon' => 'icon-paperclip',
            'url' => ['/edifactdata/edifact'],
            'visible' => Yii::app()->user->checkAccess('Edifactdata.EcntContainer.Menu'),
        ],        
    
        [
            'label' => Yii::t('dbr_app', 'Office'),
            'visible' => true,
            'icon' => 'building',
            'items' => [
                [
                    'label' => Yii::t('dbr_app', 'Companies'),
                    'url' => ['/d2company/ccmpCompany'],
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ],
                [
                    'label' => Yii::t('dbr_app', 'Persons'),
                    'url' => ['/d2person/pprsPerson'],
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ],
                [
                    'label' => Yii::t('dbr_app', 'Countries'),
                    'url' => ['/d2company/ccntCountry'],
                    'visible' => Yii::app()->user->checkAccess('Administrator'),
                ],
                [
                    'label' => Yii::t('dbr_app', 'Wiki'),
                    'url' => ['/wiki/default/pageIndex'],
                    'visible' => Yii::app()->user->checkAccess('WikiEditor'),
                ],
            ]
        ],
        [
            'label' => Yii::t('dbr_app', 'Reports'),
            'icon'=>'book',
            'visible' => Yii::app()->user->checkAccess('Reports'),
            'items' => [
                [
                    'label' => Yii::t('EdifactDataModule.model', 'Status of day'),
                    'url' => ['/edifactdata/Report/Day'],
                    'visible' => Yii::app()->user->checkAccess('Edifactdata.EcntContainer.Menu'),
                ],

            ]
        ],
        [
              'label' => Yii::t('EdifactDataModule.model', 'Orders'),
              'url' => ['/ldm/pfOrder'],
              'icon' => 'file-text-alt',
              'visible' => Yii::app()->user->checkAccess('Ldm.PfOrder.Menu'),
        ],        
    ],
        ]
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
