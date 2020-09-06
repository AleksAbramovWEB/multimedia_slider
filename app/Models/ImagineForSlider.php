<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ImagineForSlider
 *
 * @property int $id
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ImagineForSlider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImagineForSlider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImagineForSlider query()
 * @method static \Illuminate\Database\Eloquent\Builder|ImagineForSlider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagineForSlider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagineForSlider wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImagineForSlider whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ImagineForSlider extends Model
{
    protected $table = 'imagine_for_slider';

    protected $fillable = ['path'];
}
