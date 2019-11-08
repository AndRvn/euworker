<?php


namespace App\Traits;

use Illuminate\Database\Eloquent\MassAssignmentException;

trait Translatable
{
    public function fillWithTranslatable(array $attributes)
    {
        $totallyGuarded = $this->totallyGuarded();

        foreach ($attributes as $key => $value) {
            if ($this->isTranslatableAttribute($key)) {
                $this->setTranslation($key, $this->getLocale(), $value);
            }
        }

        foreach ($this->fillableFromArray($attributes) as $key => $value) {
            $key = $this->removeTableFromKey($key);

            if ($this->isFillable($key)) {
                $this->setAttribute($key, $value);
            } elseif ($totallyGuarded) {
                throw new MassAssignmentException(sprintf(
                    'Add [%s] to fillable property to allow mass assignment on [%s].',
                    $key, get_class($this)
                ));
            }
        }

        return $this;
    }
}
