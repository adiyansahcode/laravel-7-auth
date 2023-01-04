<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\UserModel
 *
 * @property int $id
 * @property string $uuid
 * @property string|null $name
 * @property string|null $username
 * @property string|null $phone
 * @property string|null $email
 * @property \datetime|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property \datetime|null $created_at
 * @property int|null $created_by
 * @property \datetime|null $updated_at
 * @property int|null $updated_by
 * @property \datetime|null $deleted_at
 * @property int|null $deleted_by
 * @property bool $is_active 0 = nonactive, 1 = active
 * @property \datetime|null $activated_at
 * @property int|null $activated_by
 * @property \datetime|null $deactivated_at
 * @property int|null $deactivated_by
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereActivatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereActivatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereDeactivatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereDeactivatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserModel whereUuid($value)
 */
	class UserModel extends \Eloquent {}
}

