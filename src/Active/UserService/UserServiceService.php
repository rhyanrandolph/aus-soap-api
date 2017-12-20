<?php

namespace Active\UserService;

class UserServiceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'getPhoneNumbers' => 'Active\\UserService\\getPhoneNumbers',
      'contextDefaultImpl' => 'Active\\UserService\\contextDefaultImpl',
      'getPhoneNumbersResponse' => 'Active\\UserService\\getPhoneNumbersResponse',
      'phoneNumbers' => 'Active\\UserService\\phoneNumbers',
      'phoneNumber' => 'Active\\UserService\\phoneNumber',
      'getPrimaryPhoneNumber' => 'Active\\UserService\\getPrimaryPhoneNumber',
      'getPrimaryPhoneNumberResponse' => 'Active\\UserService\\getPrimaryPhoneNumberResponse',
      'sendResetAccountPasswordToken' => 'Active\\UserService\\sendResetAccountPasswordToken',
      'SenderType' => 'Active\\UserService\\SenderType',
      'sendResetAccountPasswordTokenResponse' => 'Active\\UserService\\sendResetAccountPasswordTokenResponse',
      'setUserName' => 'Active\\UserService\\setUserName',
      'setUserNameResponse' => 'Active\\UserService\\setUserNameResponse',
      'getEmailAddresses' => 'Active\\UserService\\getEmailAddresses',
      'getEmailAddressesResponse' => 'Active\\UserService\\getEmailAddressesResponse',
      'emailAddresses' => 'Active\\UserService\\emailAddresses',
      'emailAddress' => 'Active\\UserService\\emailAddress',
      'updateAccountPasswordWithToken' => 'Active\\UserService\\updateAccountPasswordWithToken',
      'updateAccountPasswordWithTokenResponse' => 'Active\\UserService\\updateAccountPasswordWithTokenResponse',
      'createUserWithGeneratedPassword' => 'Active\\UserService\\createUserWithGeneratedPassword',
      'CreateUserRequestType' => 'Active\\UserService\\CreateUserRequestType',
      'preferredLocales' => 'Active\\UserService\\preferredLocales',
      'account' => 'Active\\UserService\\account',
      'person' => 'Active\\UserService\\person',
      'addresses' => 'Active\\UserService\\addresses',
      'address' => 'Active\\UserService\\address',
      'createUserWithGeneratedPasswordResponse' => 'Active\\UserService\\createUserWithGeneratedPasswordResponse',
      'CreateUserResultType' => 'Active\\UserService\\CreateUserResultType',
      'user' => 'Active\\UserService\\user',
      'findUsersByGroupIdAndGroupRoleId' => 'Active\\UserService\\findUsersByGroupIdAndGroupRoleId',
      'findUsersByGroupIdAndGroupRoleIdResponse' => 'Active\\UserService\\findUsersByGroupIdAndGroupRoleIdResponse',
      'findGroupRoleMappingsByGroup' => 'Active\\UserService\\findGroupRoleMappingsByGroup',
      'findGroupRoleMappingsByGroupResponse' => 'Active\\UserService\\findGroupRoleMappingsByGroupResponse',
      'groupRoleMapping' => 'Active\\UserService\\groupRoleMapping',
      'userGroupRole' => 'Active\\UserService\\userGroupRole',
      'findPreferredChannel' => 'Active\\UserService\\findPreferredChannel',
      'findPreferredChannelResponse' => 'Active\\UserService\\findPreferredChannelResponse',
      'channelInfo' => 'Active\\UserService\\channelInfo',
      'findUserById' => 'Active\\UserService\\findUserById',
      'findUserByIdResponse' => 'Active\\UserService\\findUserByIdResponse',
      'addAddress' => 'Active\\UserService\\addAddress',
      'addAddressResponse' => 'Active\\UserService\\addAddressResponse',
      'findTwitterAddressById' => 'Active\\UserService\\findTwitterAddressById',
      'findTwitterAddressByIdResponse' => 'Active\\UserService\\findTwitterAddressByIdResponse',
      'personTwitterAddress' => 'Active\\UserService\\personTwitterAddress',
      'unbindExternalAccount' => 'Active\\UserService\\unbindExternalAccount',
      'unbindExternalAccountResponse' => 'Active\\UserService\\unbindExternalAccountResponse',
      'removeEmailAddress' => 'Active\\UserService\\removeEmailAddress',
      'removeEmailAddressResponse' => 'Active\\UserService\\removeEmailAddressResponse',
      'getUserProfile' => 'Active\\UserService\\getUserProfile',
      'getUserProfileResponse' => 'Active\\UserService\\getUserProfileResponse',
      'userProfile' => 'Active\\UserService\\userProfile',
      'setDisplayName' => 'Active\\UserService\\setDisplayName',
      'setDisplayNameResponse' => 'Active\\UserService\\setDisplayNameResponse',
      'createUserGroup' => 'Active\\UserService\\createUserGroup',
      'userGroup' => 'Active\\UserService\\userGroup',
      'createUserGroupResponse' => 'Active\\UserService\\createUserGroupResponse',
      'findEnterprisePersonIdByUserName' => 'Active\\UserService\\findEnterprisePersonIdByUserName',
      'findEnterprisePersonIdByUserNameResponse' => 'Active\\UserService\\findEnterprisePersonIdByUserNameResponse',
      'makePreferred' => 'Active\\UserService\\makePreferred',
      'makePreferredResponse' => 'Active\\UserService\\makePreferredResponse',
      'getPrimaryAddress' => 'Active\\UserService\\getPrimaryAddress',
      'getPrimaryAddressResponse' => 'Active\\UserService\\getPrimaryAddressResponse',
      'findUserGroupRolesByMarketIdentifier' => 'Active\\UserService\\findUserGroupRolesByMarketIdentifier',
      'findUserGroupRolesByMarketIdentifierResponse' => 'Active\\UserService\\findUserGroupRolesByMarketIdentifierResponse',
      'setSecretQuestion' => 'Active\\UserService\\setSecretQuestion',
      'setSecretQuestionResponse' => 'Active\\UserService\\setSecretQuestionResponse',
      'createUser' => 'Active\\UserService\\createUser',
      'createUserResponse' => 'Active\\UserService\\createUserResponse',
      'addUserToGroup' => 'Active\\UserService\\addUserToGroup',
      'addUserToGroupResponse' => 'Active\\UserService\\addUserToGroupResponse',
      'findExternalAccountsByNameSpaceAndUsername' => 'Active\\UserService\\findExternalAccountsByNameSpaceAndUsername',
      'findExternalAccountsByNameSpaceAndUsernameResponse' => 'Active\\UserService\\findExternalAccountsByNameSpaceAndUsernameResponse',
      'externalAccount' => 'Active\\UserService\\externalAccount',
      'domainObject' => 'Active\\UserService\\domainObject',
      'valueObject' => 'Active\\UserService\\valueObject',
      'domainObjectBean' => 'Active\\UserService\\domainObjectBean',
      'updateEmailAddress' => 'Active\\UserService\\updateEmailAddress',
      'updateEmailAddressResponse' => 'Active\\UserService\\updateEmailAddressResponse',
      'getPrimaryEmailAddress' => 'Active\\UserService\\getPrimaryEmailAddress',
      'getPrimaryEmailAddressResponse' => 'Active\\UserService\\getPrimaryEmailAddressResponse',
      'getAddresses' => 'Active\\UserService\\getAddresses',
      'getAddressesResponse' => 'Active\\UserService\\getAddressesResponse',
      'findAccountByExternalAccount' => 'Active\\UserService\\findAccountByExternalAccount',
      'findAccountByExternalAccountResponse' => 'Active\\UserService\\findAccountByExternalAccountResponse',
      'getChannelStatuses' => 'Active\\UserService\\getChannelStatuses',
      'getChannelStatusesResponse' => 'Active\\UserService\\getChannelStatusesResponse',
      'findUserByUserName' => 'Active\\UserService\\findUserByUserName',
      'findUserByUserNameResponse' => 'Active\\UserService\\findUserByUserNameResponse',
      'createPerson' => 'Active\\UserService\\createPerson',
      'createPersonResponse' => 'Active\\UserService\\createPersonResponse',
      'updateUser' => 'Active\\UserService\\updateUser',
      'updateUserResponse' => 'Active\\UserService\\updateUserResponse',
      'addEmailAddress' => 'Active\\UserService\\addEmailAddress',
      'addEmailAddressResponse' => 'Active\\UserService\\addEmailAddressResponse',
      'bindExternalAccount' => 'Active\\UserService\\bindExternalAccount',
      'bindExternalAccountResponse' => 'Active\\UserService\\bindExternalAccountResponse',
      'doesEnterprisePersonIdExist' => 'Active\\UserService\\doesEnterprisePersonIdExist',
      'doesEnterprisePersonIdExistResponse' => 'Active\\UserService\\doesEnterprisePersonIdExistResponse',
      'addPhoneNumber' => 'Active\\UserService\\addPhoneNumber',
      'addPhoneNumberResponse' => 'Active\\UserService\\addPhoneNumberResponse',
      'findAllChannelsForPerson' => 'Active\\UserService\\findAllChannelsForPerson',
      'findAllChannelsForPersonResponse' => 'Active\\UserService\\findAllChannelsForPersonResponse',
      'validateChannel' => 'Active\\UserService\\validateChannel',
      'validateChannelResponse' => 'Active\\UserService\\validateChannelResponse',
      'updateAddress' => 'Active\\UserService\\updateAddress',
      'updateAddressResponse' => 'Active\\UserService\\updateAddressResponse',
      'findUserGroupById' => 'Active\\UserService\\findUserGroupById',
      'findUserGroupByIdResponse' => 'Active\\UserService\\findUserGroupByIdResponse',
      'createUserNoEmail' => 'Active\\UserService\\createUserNoEmail',
      'createUserNoEmailResponse' => 'Active\\UserService\\createUserNoEmailResponse',
      'findChannelByTypeAndId' => 'Active\\UserService\\findChannelByTypeAndId',
      'findChannelByTypeAndIdResponse' => 'Active\\UserService\\findChannelByTypeAndIdResponse',
      'deleteUserGroup' => 'Active\\UserService\\deleteUserGroup',
      'deleteUserGroupResponse' => 'Active\\UserService\\deleteUserGroupResponse',
      'resetPassword' => 'Active\\UserService\\resetPassword',
      'resetPasswordResponse' => 'Active\\UserService\\resetPasswordResponse',
      'setPassword' => 'Active\\UserService\\setPassword',
      'setPasswordResponse' => 'Active\\UserService\\setPasswordResponse',
      'findChannelsByPersonAndType' => 'Active\\UserService\\findChannelsByPersonAndType',
      'findChannelsByPersonAndTypeResponse' => 'Active\\UserService\\findChannelsByPersonAndTypeResponse',
      'removeAddress' => 'Active\\UserService\\removeAddress',
      'removeAddressResponse' => 'Active\\UserService\\removeAddressResponse',
      'removeUserFromGroup' => 'Active\\UserService\\removeUserFromGroup',
      'removeUserFromGroupResponse' => 'Active\\UserService\\removeUserFromGroupResponse',
      'doesUserNameExist' => 'Active\\UserService\\doesUserNameExist',
      'doesUserNameExistResponse' => 'Active\\UserService\\doesUserNameExistResponse',
      'findUserByEnterprisePersonId' => 'Active\\UserService\\findUserByEnterprisePersonId',
      'findUserByEnterprisePersonIdResponse' => 'Active\\UserService\\findUserByEnterprisePersonIdResponse',
      'updatePhoneNumber' => 'Active\\UserService\\updatePhoneNumber',
      'updatePhoneNumberResponse' => 'Active\\UserService\\updatePhoneNumberResponse',
      'globalOptOutPerson' => 'Active\\UserService\\globalOptOutPerson',
      'globalOptOutPersonResponse' => 'Active\\UserService\\globalOptOutPersonResponse',
      'updateTwitterAddress' => 'Active\\UserService\\updateTwitterAddress',
      'updateTwitterAddressResponse' => 'Active\\UserService\\updateTwitterAddressResponse',
      'doesDisplayNameExist' => 'Active\\UserService\\doesDisplayNameExist',
      'doesDisplayNameExistResponse' => 'Active\\UserService\\doesDisplayNameExistResponse',
      'getUserProfileByUsername' => 'Active\\UserService\\getUserProfileByUsername',
      'getUserProfileByUsernameResponse' => 'Active\\UserService\\getUserProfileByUsernameResponse',
      'removePhoneNumber' => 'Active\\UserService\\removePhoneNumber',
      'removePhoneNumberResponse' => 'Active\\UserService\\removePhoneNumberResponse',
      'findPrimaryChannels' => 'Active\\UserService\\findPrimaryChannels',
      'findPrimaryChannelsResponse' => 'Active\\UserService\\findPrimaryChannelsResponse',
      'makePrimary' => 'Active\\UserService\\makePrimary',
      'makePrimaryResponse' => 'Active\\UserService\\makePrimaryResponse',
      'getUserProfileByEnterprisePersonId' => 'Active\\UserService\\getUserProfileByEnterprisePersonId',
      'getUserProfileByEnterprisePersonIdResponse' => 'Active\\UserService\\getUserProfileByEnterprisePersonIdResponse',
      'findGroupRoleMappingsByPerson' => 'Active\\UserService\\findGroupRoleMappingsByPerson',
      'findGroupRoleMappingsByPersonResponse' => 'Active\\UserService\\findGroupRoleMappingsByPersonResponse',
      'getChannelTypes' => 'Active\\UserService\\getChannelTypes',
      'getChannelTypesResponse' => 'Active\\UserService\\getChannelTypesResponse',
      'ActiveEntityNotFoundException' => 'Active\\UserService\\ActiveEntityNotFoundException',
      'NonUniqueUsernameException' => 'Active\\UserService\\NonUniqueUsernameException',
      'NonUniqueDisplayNameException' => 'Active\\UserService\\NonUniqueDisplayNameException',
      'IllegalArgumentException' => 'Active\\UserService\\IllegalArgumentException',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);

      parent::__construct($wsdl, $options);
    }

    /**
     * @param getPhoneNumbers $parameters
     * @return getPhoneNumbersResponse
     */
    public function getPhoneNumbers(getPhoneNumbers $parameters)
    {
      return $this->__soapCall('getPhoneNumbers', array($parameters));
    }

    /**
     * @param getPrimaryPhoneNumber $parameters
     * @return getPrimaryPhoneNumberResponse
     */
    public function getPrimaryPhoneNumber(getPrimaryPhoneNumber $parameters)
    {
      return $this->__soapCall('getPrimaryPhoneNumber', array($parameters));
    }

    /**
     * @param sendResetAccountPasswordToken $parameters
     * @return sendResetAccountPasswordTokenResponse
     */
    public function sendResetAccountPasswordToken(sendResetAccountPasswordToken $parameters)
    {
      return $this->__soapCall('sendResetAccountPasswordToken', array($parameters));
    }

    /**
     * @param setUserName $parameters
     * @return setUserNameResponse
     */
    public function setUserName(setUserName $parameters)
    {
      return $this->__soapCall('setUserName', array($parameters));
    }

    /**
     * @param getEmailAddresses $parameters
     * @return getEmailAddressesResponse
     */
    public function getEmailAddresses(getEmailAddresses $parameters)
    {
      return $this->__soapCall('getEmailAddresses', array($parameters));
    }

    /**
     * @param updateAccountPasswordWithToken $parameters
     * @return updateAccountPasswordWithTokenResponse
     */
    public function updateAccountPasswordWithToken(updateAccountPasswordWithToken $parameters)
    {
      return $this->__soapCall('updateAccountPasswordWithToken', array($parameters));
    }

    /**
     * @param createUserWithGeneratedPassword $parameters
     * @return createUserWithGeneratedPasswordResponse
     */
    public function createUserWithGeneratedPassword(createUserWithGeneratedPassword $parameters)
    {
      return $this->__soapCall('createUserWithGeneratedPassword', array($parameters));
    }

    /**
     * @param findUsersByGroupIdAndGroupRoleId $parameters
     * @return findUsersByGroupIdAndGroupRoleIdResponse
     */
    public function findUsersByGroupIdAndGroupRoleId(findUsersByGroupIdAndGroupRoleId $parameters)
    {
      return $this->__soapCall('findUsersByGroupIdAndGroupRoleId', array($parameters));
    }

    /**
     * @param findGroupRoleMappingsByGroup $parameters
     * @return findGroupRoleMappingsByGroupResponse
     */
    public function findGroupRoleMappingsByGroup(findGroupRoleMappingsByGroup $parameters)
    {
      return $this->__soapCall('findGroupRoleMappingsByGroup', array($parameters));
    }

    /**
     * @param findPreferredChannel $parameters
     * @return findPreferredChannelResponse
     */
    public function findPreferredChannel(findPreferredChannel $parameters)
    {
      return $this->__soapCall('findPreferredChannel', array($parameters));
    }

    /**
     * @param findUserById $parameters
     * @return findUserByIdResponse
     */
    public function findUserById(findUserById $parameters)
    {
      return $this->__soapCall('findUserById', array($parameters));
    }

    /**
     * @param addAddress $parameters
     * @return addAddressResponse
     */
    public function addAddress(addAddress $parameters)
    {
      return $this->__soapCall('addAddress', array($parameters));
    }

    /**
     * @param findTwitterAddressById $parameters
     * @return findTwitterAddressByIdResponse
     */
    public function findTwitterAddressById(findTwitterAddressById $parameters)
    {
      return $this->__soapCall('findTwitterAddressById', array($parameters));
    }

    /**
     * @param unbindExternalAccount $parameters
     * @return unbindExternalAccountResponse
     */
    public function unbindExternalAccount(unbindExternalAccount $parameters)
    {
      return $this->__soapCall('unbindExternalAccount', array($parameters));
    }

    /**
     * @param removeEmailAddress $parameters
     * @return removeEmailAddressResponse
     */
    public function removeEmailAddress(removeEmailAddress $parameters)
    {
      return $this->__soapCall('removeEmailAddress', array($parameters));
    }

    /**
     * @param getUserProfile $parameters
     * @return getUserProfileResponse
     */
    public function getUserProfile(getUserProfile $parameters)
    {
      return $this->__soapCall('getUserProfile', array($parameters));
    }

    /**
     * @param setDisplayName $parameters
     * @return setDisplayNameResponse
     */
    public function setDisplayName(setDisplayName $parameters)
    {
      return $this->__soapCall('setDisplayName', array($parameters));
    }

    /**
     * @param createUserGroup $parameters
     * @return createUserGroupResponse
     */
    public function createUserGroup(createUserGroup $parameters)
    {
      return $this->__soapCall('createUserGroup', array($parameters));
    }

    /**
     * @param findEnterprisePersonIdByUserName $parameters
     * @return findEnterprisePersonIdByUserNameResponse
     */
    public function findEnterprisePersonIdByUserName(findEnterprisePersonIdByUserName $parameters)
    {
      return $this->__soapCall('findEnterprisePersonIdByUserName', array($parameters));
    }

    /**
     * @param makePreferred $parameters
     * @return makePreferredResponse
     */
    public function makePreferred(makePreferred $parameters)
    {
      return $this->__soapCall('makePreferred', array($parameters));
    }

    /**
     * @param getPrimaryAddress $parameters
     * @return getPrimaryAddressResponse
     */
    public function getPrimaryAddress(getPrimaryAddress $parameters)
    {
      return $this->__soapCall('getPrimaryAddress', array($parameters));
    }

    /**
     * @param findUserGroupRolesByMarketIdentifier $parameters
     * @return findUserGroupRolesByMarketIdentifierResponse
     */
    public function findUserGroupRolesByMarketIdentifier(findUserGroupRolesByMarketIdentifier $parameters)
    {
      return $this->__soapCall('findUserGroupRolesByMarketIdentifier', array($parameters));
    }

    /**
     * @param setSecretQuestion $parameters
     * @return setSecretQuestionResponse
     */
    public function setSecretQuestion(setSecretQuestion $parameters)
    {
      return $this->__soapCall('setSecretQuestion', array($parameters));
    }

    /**
     * @param createUser $parameters
     * @return createUserResponse
     */
    public function createUser(createUser $parameters)
    {
      return $this->__soapCall('createUser', array($parameters));
    }

    /**
     * @param addUserToGroup $parameters
     * @return addUserToGroupResponse
     */
    public function addUserToGroup(addUserToGroup $parameters)
    {
      return $this->__soapCall('addUserToGroup', array($parameters));
    }

    /**
     * @param findExternalAccountsByNameSpaceAndUsername $parameters
     * @return findExternalAccountsByNameSpaceAndUsernameResponse
     */
    public function findExternalAccountsByNameSpaceAndUsername(findExternalAccountsByNameSpaceAndUsername $parameters)
    {
      return $this->__soapCall('findExternalAccountsByNameSpaceAndUsername', array($parameters));
    }

    /**
     * @param updateEmailAddress $parameters
     * @return updateEmailAddressResponse
     */
    public function updateEmailAddress(updateEmailAddress $parameters)
    {
      return $this->__soapCall('updateEmailAddress', array($parameters));
    }

    /**
     * @param getPrimaryEmailAddress $parameters
     * @return getPrimaryEmailAddressResponse
     */
    public function getPrimaryEmailAddress(getPrimaryEmailAddress $parameters)
    {
      return $this->__soapCall('getPrimaryEmailAddress', array($parameters));
    }

    /**
     * @param getAddresses $parameters
     * @return getAddressesResponse
     */
    public function getAddresses(getAddresses $parameters)
    {
      return $this->__soapCall('getAddresses', array($parameters));
    }

    /**
     * @param findAccountByExternalAccount $parameters
     * @return findAccountByExternalAccountResponse
     */
    public function findAccountByExternalAccount(findAccountByExternalAccount $parameters)
    {
      return $this->__soapCall('findAccountByExternalAccount', array($parameters));
    }

    /**
     * @param getChannelStatuses $parameters
     * @return getChannelStatusesResponse
     */
    public function getChannelStatuses(getChannelStatuses $parameters)
    {
      return $this->__soapCall('getChannelStatuses', array($parameters));
    }

    /**
     * @param findUserByUserName $parameters
     * @return findUserByUserNameResponse
     */
    public function findUserByUserName(findUserByUserName $parameters)
    {
      return $this->__soapCall('findUserByUserName', array($parameters));
    }

    /**
     * @param createPerson $parameters
     * @return createPersonResponse
     */
    public function createPerson(createPerson $parameters)
    {
      return $this->__soapCall('createPerson', array($parameters));
    }

    /**
     * @param updateUser $parameters
     * @return updateUserResponse
     */
    public function updateUser(updateUser $parameters)
    {
      return $this->__soapCall('updateUser', array($parameters));
    }

    /**
     * @param addEmailAddress $parameters
     * @return addEmailAddressResponse
     */
    public function addEmailAddress(addEmailAddress $parameters)
    {
      return $this->__soapCall('addEmailAddress', array($parameters));
    }

    /**
     * @param bindExternalAccount $parameters
     * @return bindExternalAccountResponse
     */
    public function bindExternalAccount(bindExternalAccount $parameters)
    {
      return $this->__soapCall('bindExternalAccount', array($parameters));
    }

    /**
     * @param doesEnterprisePersonIdExist $parameters
     * @return doesEnterprisePersonIdExistResponse
     */
    public function doesEnterprisePersonIdExist(doesEnterprisePersonIdExist $parameters)
    {
      return $this->__soapCall('doesEnterprisePersonIdExist', array($parameters));
    }

    /**
     * @param addPhoneNumber $parameters
     * @return addPhoneNumberResponse
     */
    public function addPhoneNumber(addPhoneNumber $parameters)
    {
      return $this->__soapCall('addPhoneNumber', array($parameters));
    }

    /**
     * @param findAllChannelsForPerson $parameters
     * @return findAllChannelsForPersonResponse
     */
    public function findAllChannelsForPerson(findAllChannelsForPerson $parameters)
    {
      return $this->__soapCall('findAllChannelsForPerson', array($parameters));
    }

    /**
     * @param validateChannel $parameters
     * @return validateChannelResponse
     */
    public function validateChannel(validateChannel $parameters)
    {
      return $this->__soapCall('validateChannel', array($parameters));
    }

    /**
     * @param updateAddress $parameters
     * @return updateAddressResponse
     */
    public function updateAddress(updateAddress $parameters)
    {
      return $this->__soapCall('updateAddress', array($parameters));
    }

    /**
     * @param findUserGroupById $parameters
     * @return findUserGroupByIdResponse
     */
    public function findUserGroupById(findUserGroupById $parameters)
    {
      return $this->__soapCall('findUserGroupById', array($parameters));
    }

    /**
     * @param createUserNoEmail $parameters
     * @return createUserNoEmailResponse
     */
    public function createUserNoEmail(createUserNoEmail $parameters)
    {
      return $this->__soapCall('createUserNoEmail', array($parameters));
    }

    /**
     * @param findChannelByTypeAndId $parameters
     * @return findChannelByTypeAndIdResponse
     */
    public function findChannelByTypeAndId(findChannelByTypeAndId $parameters)
    {
      return $this->__soapCall('findChannelByTypeAndId', array($parameters));
    }

    /**
     * @param deleteUserGroup $parameters
     * @return deleteUserGroupResponse
     */
    public function deleteUserGroup(deleteUserGroup $parameters)
    {
      return $this->__soapCall('deleteUserGroup', array($parameters));
    }

    /**
     * @param resetPassword $parameters
     * @return resetPasswordResponse
     */
    public function resetPassword(resetPassword $parameters)
    {
      return $this->__soapCall('resetPassword', array($parameters));
    }

    /**
     * @param setPassword $parameters
     * @return setPasswordResponse
     */
    public function setPassword(setPassword $parameters)
    {
      return $this->__soapCall('setPassword', array($parameters));
    }

    /**
     * @param findChannelsByPersonAndType $parameters
     * @return findChannelsByPersonAndTypeResponse
     */
    public function findChannelsByPersonAndType(findChannelsByPersonAndType $parameters)
    {
      return $this->__soapCall('findChannelsByPersonAndType', array($parameters));
    }

    /**
     * @param removeAddress $parameters
     * @return removeAddressResponse
     */
    public function removeAddress(removeAddress $parameters)
    {
      return $this->__soapCall('removeAddress', array($parameters));
    }

    /**
     * @param removeUserFromGroup $parameters
     * @return removeUserFromGroupResponse
     */
    public function removeUserFromGroup(removeUserFromGroup $parameters)
    {
      return $this->__soapCall('removeUserFromGroup', array($parameters));
    }

    /**
     * @param doesUserNameExist $parameters
     * @return doesUserNameExistResponse
     */
    public function doesUserNameExist(doesUserNameExist $parameters)
    {
      return $this->__soapCall('doesUserNameExist', array($parameters));
    }

    /**
     * @param findUserByEnterprisePersonId $parameters
     * @return findUserByEnterprisePersonIdResponse
     */
    public function findUserByEnterprisePersonId(findUserByEnterprisePersonId $parameters)
    {
      return $this->__soapCall('findUserByEnterprisePersonId', array($parameters));
    }

    /**
     * @param updatePhoneNumber $parameters
     * @return updatePhoneNumberResponse
     */
    public function updatePhoneNumber(updatePhoneNumber $parameters)
    {
      return $this->__soapCall('updatePhoneNumber', array($parameters));
    }

    /**
     * @param globalOptOutPerson $parameters
     * @return globalOptOutPersonResponse
     */
    public function globalOptOutPerson(globalOptOutPerson $parameters)
    {
      return $this->__soapCall('globalOptOutPerson', array($parameters));
    }

    /**
     * @param updateTwitterAddress $parameters
     * @return updateTwitterAddressResponse
     */
    public function updateTwitterAddress(updateTwitterAddress $parameters)
    {
      return $this->__soapCall('updateTwitterAddress', array($parameters));
    }

    /**
     * @param doesDisplayNameExist $parameters
     * @return doesDisplayNameExistResponse
     */
    public function doesDisplayNameExist(doesDisplayNameExist $parameters)
    {
      return $this->__soapCall('doesDisplayNameExist', array($parameters));
    }

    /**
     * @param getUserProfileByUsername $parameters
     * @return getUserProfileByUsernameResponse
     */
    public function getUserProfileByUsername(getUserProfileByUsername $parameters)
    {
      return $this->__soapCall('getUserProfileByUsername', array($parameters));
    }

    /**
     * @param removePhoneNumber $parameters
     * @return removePhoneNumberResponse
     */
    public function removePhoneNumber(removePhoneNumber $parameters)
    {
      return $this->__soapCall('removePhoneNumber', array($parameters));
    }

    /**
     * @param findPrimaryChannels $parameters
     * @return findPrimaryChannelsResponse
     */
    public function findPrimaryChannels(findPrimaryChannels $parameters)
    {
      return $this->__soapCall('findPrimaryChannels', array($parameters));
    }

    /**
     * @param makePrimary $parameters
     * @return makePrimaryResponse
     */
    public function makePrimary(makePrimary $parameters)
    {
      return $this->__soapCall('makePrimary', array($parameters));
    }

    /**
     * @param getUserProfileByEnterprisePersonId $parameters
     * @return getUserProfileByEnterprisePersonIdResponse
     */
    public function getUserProfileByEnterprisePersonId(getUserProfileByEnterprisePersonId $parameters)
    {
      return $this->__soapCall('getUserProfileByEnterprisePersonId', array($parameters));
    }

    /**
     * @param findGroupRoleMappingsByPerson $parameters
     * @return findGroupRoleMappingsByPersonResponse
     */
    public function findGroupRoleMappingsByPerson(findGroupRoleMappingsByPerson $parameters)
    {
      return $this->__soapCall('findGroupRoleMappingsByPerson', array($parameters));
    }

    /**
     * @param getChannelTypes $parameters
     * @return getChannelTypesResponse
     */
    public function getChannelTypes(getChannelTypes $parameters)
    {
      return $this->__soapCall('getChannelTypes', array($parameters));
    }

}
