<?php
    /**************************************************************************
     *                                                                        *
     *  Email Module Manager Class                                            *
     *                                                                        *
     **************************************************************************/


    /*!
     *  Email Module Manager Class
     */
    class rtCommEmailModuleManager
    {
        //! Email Module Manager No
        public $iEmailModuleManagerNo;

        //! Module Name
        public $sName;

        //! Array of Email Manager id allowed for the module
        public $aEmailManagerId;

        //! Number of email Manager
        public $iNumEmailManagerId;

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