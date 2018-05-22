<?php

$config = array(

        'login' => array(
                array(
                        'field' => 'uname',
                        'label' => 'user id',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'upass',
                        'label' => 'password',
                        'rules' => 'required|min_length[2]'
                )
        ),

        'CitizenRegistration' => array(
                array(
                        'field' => 'Purpose',
                        'label' => 'Purpose',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'FirstName',
                        'label' => 'First Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'MiddleName',
                        'label' => 'Middle Name',
                        'rules' => 'alpha'
                ),
                array(
                        'field' => 'LastName',
                        'label' => 'Last Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'Gender',
                        'label' => 'Gender',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'DateOfBirth',
                        'label' => 'Date of Birth',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'UID',
                        'label' => 'UID',
                        'rules' => 'required|is_natural'
                ),
                array(
                        'field' => 'MobileNo',
                        'label' => 'Mobile No',
                        'rules' => 'required|is_natural|exact_length[10]'
                ),
                array(
                        'field' => 'AlternateMobileNo',
                        'label' => 'Alternate Mobile No',
                        'rules' => 'is_natural|exact_length[10]'
                ),
                array(
                        'field' => 'EmailID',
                        'label' => 'Email ID',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'MotherFirstName',
                        'label' => 'Mother\'s First Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'MotherMiddleName',
                        'label' => 'Mother\'s Middle Name',
                        'rules' => 'alpha'
                ),
                array(
                        'field' => 'CastCertificateNo',
                        'label' => 'Cast Certificate No',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'UserName',
                        'label' => 'User Name',
                        'rules' => 'required|is_unique[tribe_registration.UserName]'
                ),
                array(
                        'field' => 'Password',
                        'label' => 'Password',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'ConfirmPassword',
                        'label' => 'Confirm Password',
                        'rules' => 'required'
                )
        )
);
