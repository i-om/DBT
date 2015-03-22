<?php
    /**************************************************************************
     *                                                                        *
     *  Communication Manager Classes                                         *
     *                                                                        *
     **************************************************************************/


    /*!
     *  Communication Manager Class
     */
    class rtCommunicationManager
    {
        //! Communication Manager No
        public $iCommunicationManagerNo;

        //! Communication Type : 'COMM_DISPLAY','COMM_EMAIL','COMM_SMS',
        //! 'COMM_DISPLAY_EMAIL','COMM_DISPLAY_SMS','COMM_EMAIL_SMS',
        //! 'COMM_DISPLAY_EMAIL_SMS'
        public $sCommunicationType;

        //! Array Of Message Type : (sms , email , display)
        public $aMessageType;

        //! Array Of object Message Id : s-1,e-3,d-4 (s -> sms , e -> email ,
        //! d -> display)
        public $aMessage;

        //! Number of message Ids
        public $iNumMessage;

        //! From User Id (Initiating the communication)
        public $iFromUserId;

        //! Repeat set (yes , no)
        public $sRepeat;

        //! Scheduled date for the communcation
        public $dScheduleDate;

        //! Expire Date for the repeat (Only used for the repeat communication
        //! else leave it blank)
        public $dExpireDate;

        //! Frequency of the repeat (only used for the repeat communication)
        public $iFrequency;

        //! User Id Who initiated the communication
        public $iUserNo;

        //! Communication inititated date
        public $dCreatedDate;

        //! Communication initiated time
        public $tCreatedTime;

        //! Communication last updateded user no
        public $iLastUpdateUserId;

        //! Communication last updated date
        public $dLastUpdateDate;

        //! Communication last updated time
        public $tLastUpdateTime;

        //! Extra 1 used for future changes
        public $sExtra1;

        //! Extra 2 used for future changes
        public $sExtra2;

        //! Extra 3 used for future changes
        public $sExtra3;
    };


    /*!
     *  Communication Email Class
     */
    class rtCommunicationEmail
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

        //! Email Manager Id
        public $iEmailManagerId;

        //! Email Status
        public $sStatus;

        //! Email Sent date
        public $dSentDate;

        //! Email Sent Time
        public $tSentTime;

    };


    /*!
     *  Communication SMS Class
     */
    class rtCommunicationSMS
    {
        //! SMS Id
        public $iSMSNo;

        //! Array of receivers Name
        public $aSMSToName;

        //! Array of receivers ID
        public $aSMSToId;

        //! Number of receivers
        public $iNumSMSTo;

        //! Array of receivers Mobile Number
        public $aSMSToMobileNo;

        //! SMS From Name
        public $sSMSFromName;

        //! SMS From Mobile Number
        public $sSMSFromMobileNo;

        //! Message
        public $sMessage;

        //! Scheduled Date
        public $dScheduledDate;

        //! Scheduled Time
        public $tScheduledTime;

        //! Module Name From Where it was initialted
        public $sModuleName;

        //! SMS Module Manager Id
        public $iModuleId;

        //! SMS Manager Id
        public $iSMSManagerId;


        //! SMS Status
        public $sStatus;

        //! SMS Sent date
        public $dSentDate;

        //! SMS Sent Time
        public $tSentTime;


    };


    /*!
     *  Communication Display Class
     */
    class rtCommunicationDisplay
    {
        //! Display Id
        public $iDisplayNo;

        //! Array of Display To Names
        public $sDisplayToName;

        //! Display to Ids
        public $iDisplayToId;

        //! Array of Display To User ids
        public $iDisplayToUserId;

        //! Tag line for the display (Schedule , followup ...)
        public $sTag;

        //! Complete Message of the Display
        public $sMessage;

        //! Scheduled Data For the display
        public $dScheduledDate;

        //! Scheduled Time for the display
        public $tScheduledTime;

        //! Module name From where it was Initiated
        public $sModuleName;

        //! Record of that particular Module (which entry it belongs to in the
        //! module)
        public $iModuleId;

        //! Display Manager Id
        public $iDisplayManagerId;

    };
?>