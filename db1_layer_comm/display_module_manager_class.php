<?php
    /**************************************************************************
     *                                                                        *
     *  Display Module Manager Class                                          *
     *                                                                        *
     **************************************************************************/


    /*!
     *  Display Module Manager Class
     */
    class rtCommDisplayModuleManager
    {
        //! Display Manager module Manager
        public $iDisplayModuleManagerNo;

        //! Module Name
        public $sName;

        //! Array Of Display manager id allowed for the module
        public $aDisplayManagerId;

        //! Number of display manager
        public $iNumDisplayManagerId;

        //! Array of default display message alowed for the module
        public $aDefaultMessageId;

        //! Number of default message
        public $iNumDefaultMessageId;

        //! Created user Id
        public $iUserNo;

        //! Created Date
        public $dCreatedDate;

        //! Created time
        public $tCreatedTime;

        //! Last updated user id
        public $iLastUpdateUserId;

        //! last updated date
        public $dLastUpdateDate;

        //! last updated time
        public $tLastUpdateTime;

        //! Extra 1 For Future use
        public $sExtra1;

        //! Extra 2 For Future use
        public $sExtra2;

        //! Extra 3 For Future use
        public $sExtra3;
    };
?>