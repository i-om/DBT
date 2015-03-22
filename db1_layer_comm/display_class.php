<?php
    /**************************************************************************
     *                                                                        *
     *  Display Class                                                         *
     *                                                                        *
     **************************************************************************/


    /*!
     *  Display Class
     */
    class rtCommDisplay
    {
        //! Display Id
        public $iDisplayNo;

        //! Display To Names
        public $sDisplayToName;

        //! Display to Ids
        public $iDisplayToId;

        //! Display To User ids
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

        //! Display manager id
        public $iDisplayManagerId;

        //! User Who initiated the display communication
        public $iUserNo;

        //! Display Communication initiated date
        public $dCreatedDate;

        //! Display Communication initiated time
        public $tCreatedTime;

        //! Display Communication last Updated User Id
        public $iLastUpdateUserId;

        //! Display communocation last updated date
        public $dLastUpdateDate;

        //! Display communication last updated time
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