<?php

namespace Innoved\Versioning;

use Illuminate\Database\Eloquent\SoftDeletingTrait as SoftDeletingTrait;

trait SoftDeletes
{
    use SoftDeletingTrait;

    /**
     * Get the fully qualified "deleted at" column.
     *
     * @return string
     */
    public function getQualifiedDeletedAtColumn()
    {
        $deletedAt = $this->getDeletedAtColumn();

        if (isset($this->versioned) && in_array($deletedAt, $this->versioned)) {
            return $this->getVersionTable().'.'.$deletedAt;
        }

        return $this->getTable().'.'.$deletedAt;
    }
}
