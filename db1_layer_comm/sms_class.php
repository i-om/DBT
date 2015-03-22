<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Class                                                             *
     *                                                                        *
     **************************************************************************/


    /*!
     *  SMS Class
     */
    class rtCommSMS
    {
        //! Sms No
        public $iSMSNo;

        //! Array of Sms receivers Name
        public $aSMSToName;

        //! Array of Sms receivers Id
        public $aSMSToId;

        //! Number of sms receiver
        public $iNumSMSTo;

        //! Array of Sms receivers Mobile No
        public $aSMSToMobileNo;

        //! Sms Sender Name
        public $sSMSFromName;

        //! SMS Sender Mobile No
        public $sSMSFromMobileNo;

        //! Message
        public $sMessage;

        //! SMS Scheduled date
        public $dScheduledDate;

        //! SMS Scheduled Time
        public $tScheduledTime;

        //! Module Name
        public $sModuleName;

        //! Module Id
        public $iModuleId;

        //! SMS Manager Id
        public $iSMSManagerId;


        //! SMS Status (pending , sent)
        public $sStatus;

        //! Sms Sent date
        public $dSentDate;

        //! SMS Sent time
        public $tSentTime;

        //! SMS Sender Id
        public $sSenderId;

        //! Plus91 SMS Id
        public $sPlus91SMSId;


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


        //! Communication Manager Id
        public $iCommunicationManagerId;

        //! Extra 1 For Future use
        public $sExtra1;

        //! Extra 2 For Future use
        public $sExtra2;

        //! Extra 3 For Future use
        public $sExtra3;
    };
?>