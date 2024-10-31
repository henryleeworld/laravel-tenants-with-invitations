<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Frontend Language Lines
    |--------------------------------------------------------------------------
    */

    'tenant' => [
        'title'   => 'Tenants',
        'create' => [
            'title' => 'Add New Tenant',
            'content' => [
                'domain'      => 'Domain',
                'email'       => 'Email',
                'name'        => 'Name',
                'save_tenant' => 'Save Tenant',
            ],
        ],
        'delete' => [
            'title' => 'Delete tenant',
        ],
        'edit' => [
            'title' => 'Edit tenant',
            'content' => [
                'domain'      => 'Domain',
                'email'       => 'Email',
                'name'        => 'Name',
                'save_tenant' => 'Save Tenant',
            ],
        ],
        'mail' => [
            'accept_invitation'          => 'Accept Invitation',
            'invited_as_a_tenant'        => 'You have been invited as a tenant.',
            'tenant_invite_notification' => 'Tenant Invite Notification',
            'thank_you_for_using'        => 'Thank you for using our application!',
        ],
        'message' => [
            'are_you_sure' => 'Are you sure?',
            'no_tenants'   => 'No tenants.',
        ],
    ],
];
