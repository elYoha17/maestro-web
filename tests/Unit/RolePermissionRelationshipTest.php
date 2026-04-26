<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Tests\TestCase;

uses(TestCase::class);

test('role defines a many to many relationship to permissions', function () {
    $relationship = (new Role)->permissions();

    expect($relationship)->toBeInstanceOf(BelongsToMany::class)
        ->and($relationship->getTable())->toBe('role_has_permission')
        ->and($relationship->getForeignPivotKeyName())->toBe('role_id')
        ->and($relationship->getRelatedPivotKeyName())->toBe('permission_id')
        ->and($relationship->getRelated()::class)->toBe(Permission::class);
});

test('permission defines a many to many relationship to roles', function () {
    $relationship = (new Permission)->roles();

    expect($relationship)->toBeInstanceOf(BelongsToMany::class)
        ->and($relationship->getTable())->toBe('role_has_permission')
        ->and($relationship->getForeignPivotKeyName())->toBe('permission_id')
        ->and($relationship->getRelatedPivotKeyName())->toBe('role_id')
        ->and($relationship->getRelated()::class)->toBe(Role::class);
});
