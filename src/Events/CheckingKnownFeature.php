<?php

namespace Laravel\Feature\Events;

use Illuminate\Queue\SerializesModels;

class CheckingKnownFeature
{
    use SerializesModels;

    /**
     * The feature name.
     *
     * @var string
     */
    public $feature;

    /**
     * The scope of the feature check.
     *
     * @var mixed
     */
    public $scope;

    /**
     * The scope of the feature check.
     *
     * @var mixed
     */
    public $value;

    /**
     * Create a new event instance.
     *
     * @param  string  $feature
     * @param  mixed  $scope
     * @param  mixed  $value
     */
    public function __construct($feature, $scope, $value)
    {
        $this->feature = $feature;

        $this->scope = $scope;

        $this->value = $value;
    }
}
