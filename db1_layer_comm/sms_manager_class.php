<?php
    /**************************************************************************
     *                                                                        *
     *  SMS Manager Class                                                     *
     *                                                                        *
     **************************************************************************/

    /*!
     *  SMS Manager Class
     */
    class rtCommSMSManager
    {
        //! SMS Manager Id
        public $iSMSManagerNo;

        //! Plus91 SMS Id
        public $sPlus91SMSId;

        //! Manager Name
        public $sName;

        //! Manager Mobile Number
        public $sMobileNo;

        //! Sender id
        public $sSenderId;

        //! organization Name
        public $sOrganizationName;

        //! Balance Credits
        public $iPendingCredits;

        //! Expire date of the Pending credit
        public $dExpireDate;

        //! Last purchase of sms credite date
        public $dLastPurchaseDate;

        //! Last purchase of sms credite Quantity
        public $iLastPurchaseCredits;

        //! Last Expire Date
        public $dLastExpireDate;

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