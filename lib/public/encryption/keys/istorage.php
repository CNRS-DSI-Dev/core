<?php
/**
 * @author Björn Schießle <schiessle@owncloud.com>
 * @author Thomas Müller <thomas.mueller@tmit.eu>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCP\Encryption\Keys;

/**
 * Interface IStorage
 *
 * @package OCP\Encryption\Keys
 * @since 8.1.0
 */
interface IStorage {

	/**
	 * get user specific key
	 *
	 * @param string $uid ID if the user for whom we want the key
	 * @param string $keyId id of the key
	 *
	 * @return mixed key
	 * @since 8.1.0
	 */
	public function getUserKey($uid, $keyId);

	/**
	 * get file specific key
	 *
	 * @param string $path path to file
	 * @param string $keyId id of the key
	 *
	 * @return mixed key
	 * @since 8.1.0
	 */
	public function getFileKey($path, $keyId);

	/**
	 * get system-wide encryption keys not related to a specific user,
	 * e.g something like a key for public link shares
	 *
	 * @param string $keyId id of the key
	 *
	 * @return mixed key
	 * @since 8.1.0
	 */
	public function getSystemUserKey($keyId);

	/**
	 * set user specific key
	 *
	 * @param string $uid ID if the user for whom we want the key
	 * @param string $keyId id of the key
	 * @param mixed $key
	 * @since 8.1.0
	 */
	public function setUserKey($uid, $keyId, $key);

	/**
	 * set file specific key
	 *
	 * @param string $path path to file
	 * @param string $keyId id of the key
	 * @param boolean
	 * @since 8.1.0
	 */
	public function setFileKey($path, $keyId, $key);

	/**
	 * set system-wide encryption keys not related to a specific user,
	 * e.g something like a key for public link shares
	 *
	 * @param string $keyId id of the key
	 * @param mixed $key
	 *
	 * @return mixed key
	 * @since 8.1.0
	 */
	public function setSystemUserKey($keyId, $key);

	/**
	 * delete user specific key
	 *
	 * @param string $uid ID if the user for whom we want to delete the key
	 * @param string $keyId id of the key
	 *
	 * @return boolean False when the key could not be deleted
	 * @since 8.1.0
	 */
	public function deleteUserKey($uid, $keyId);

	/**
	 * delete file specific key
	 *
	 * @param string $path path to file
	 * @param string $keyId id of the key
	 *
	 * @return boolean False when the key could not be deleted
	 * @since 8.1.0
	 */
	public function deleteFileKey($path, $keyId);

	/**
	 * delete all file keys for a given file
	 *
	 * @param string $path to the file
	 * @return boolean False when the keys could not be deleted
	 * @since 8.1.0
	 */
	public function deleteAllFileKeys($path);

	/**
	 * delete system-wide encryption keys not related to a specific user,
	 * e.g something like a key for public link shares
	 *
	 * @param string $keyId id of the key
	 *
	 * @return boolean False when the key could not be deleted
	 * @since 8.1.0
	 */
	public function deleteSystemUserKey($keyId);

	/**
	 * copy keys if a file was renamed
	 *
	 * @param string $source
	 * @param string $target
	 * @since 8.1.0
	 */
	public function renameKeys($source, $target);

	/**
	 * move keys if a file was renamed
	 *
	 * @param string $source
	 * @param string $target
	 * @since 8.1.0
	 */
	public function copyKeys($source, $target);

}
