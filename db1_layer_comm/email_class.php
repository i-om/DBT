<?php
    /**************************************************************************
     *                                                                        *
     *  Email Class                                                           *
     *                                                                        *
     **************************************************************************/


    /*!
     *  Email Class
     */
    class rtCommEmail
    {
        //! Email id
        public $iEmailNo;

        //! Email To Names
        public $aEmailToName;

        //! Email To Id
        public $aEmailToId;

        //! Email To Email Ids
        public $aEmailToEmailId;

        //! Number of Email To
        public $iNumEmailTo;

        //! Email From Name
        public $sEmailFromName;

        //! Email From Email Id
        public $sEmailFromEmailId;

        //! Email Subject
        public $sSubject;

        //! Email Message
        public $sMessage;

        //! Attachment File Name
        public $aAttachment;

        //! Number of Attachment
        public $iNumAttachment;

        //! Email Scheduled Date
        public $dScheduledDate;

        //! Email Scheduled time
        public $tScheduledTime;

        //! Module Name From where email was triggered
        public $sModuleName;

        //! The corresponding module record id
        public $iModuleId;



        //! Email Status (pending / sent)
        public $sStatus;



        //! Email Sent Date
        public $dSentDate;

        //! Email Sent Time
        public $tSentTime;


        //! Created User Id
        public $iUserNo;

        //! Created Date
        public $dCreatedDate;

        //! Created time
        public $tCreatedTime;

        //! Last Updated User id
        public $iLastUpdateUserId;

        //! Last updated date
        public $dLastUpdateDate;

        //! Last Updated time
        public $tLastUpdateTime;

        //! Email Manager Id
        public $iEmailManagerId;

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