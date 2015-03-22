<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Module Manager Class                                              *
     *                                                                        *
     **************************************************************************/

    /*!
     *  SMS Module Manager Class
     */
    class rtCommSMSModuleManager
    {
        //! Sms Module Manager Id
        public $iSMSModuleManagerNo;

        //! Module Name
        public $sName;

        //! Array of SMS Manager ids allowed for the module
        public $aSMSManagerId;

        //! Number of SMS Manager
        public $iNumSMSManagerId;

        //! Array of default message allowed for the module
        public $aDefaultMessageId;

        //! Number of default message
        public $iNumDefaultMessageId;

        //! Created User Id
        public $iUserNo;

        //! Created Date
        public $dCreatedDate;

        //! Created Time
        public $tCreatedTime;

        //! Last Updated User ID
        public $iLastUpdateUserId;

        //! Last Updated Date
        public $dLastUpdateDate;

        //! Last Updated Time
        public $tLastUpdateTime;

        //! Extra 1 For Future use
        public $sExtra1;

        //! Extra 2 For Future use
        public $sExtra2;

        //! Extra 3 For Future use
        public $sExtra3;
    };
?>