<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use OwenIt\Auditing\Contracts\Audit;
use OwenIt\Auditing\Contracts\Auditable;

class Timetable extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = "timetables";

    protected $auditInclude = [
        'unit_name',
        'unit_code',
        'faculty',
    ];

    protected $auditTimestamps = true;

    // TODO edit the migration for timetable
    protected $fillable = [
        'faculty',
        'course',
        'study_year',
        'session_start',
        'session_end',
        'unit_name',
        'unit_code',
        'day_of_the_week',
        'time',
        'lecturer',
        'room',
    ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }


    /**
     * Auditable Model audits.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function audits(): MorphMany
    {
        // TODO: Implement audits() method.
    }

    /**
     * Set the Audit event.
     *
     * @param string $event
     *
     * @return Auditable
     */
    public function setAuditEvent(string $event): Auditable
    {
        // TODO: Implement setAuditEvent() method.
    }

    /**
     * Get the Audit event that is set.
     *
     * @return string|null
     */
    public function getAuditEvent()
    {
        // TODO: Implement getAuditEvent() method.
    }

    /**
     * Get the events that trigger an Audit.
     *
     * @return array
     */
    public function getAuditEvents(): array
    {
        // TODO: Implement getAuditEvents() method.
    }

    /**
     * Is the model ready for auditing?
     *
     * @return bool
     */
    public function readyForAuditing(): bool
    {
        // TODO: Implement readyForAuditing() method.
    }/**
 * Return data for an Audit.
 *
 * @return array
 * @throws \OwenIt\Auditing\Exceptions\AuditingException
 *
 */
    public function toAudit(): array
    {
        // TODO: Implement toAudit() method.
    }

    /**
     * Get the (Auditable) attributes included in audit.
     *
     * @return array
     */
    public function getAuditInclude(): array
    {
        // TODO: Implement getAuditInclude() method.
    }

    /**
     * Get the (Auditable) attributes excluded from audit.
     *
     * @return array
     */
    public function getAuditExclude(): array
    {
        // TODO: Implement getAuditExclude() method.
    }

    /**
     * Get the strict audit status.
     *
     * @return bool
     */
    public function getAuditStrict(): bool
    {
        // TODO: Implement getAuditStrict() method.
    }

    /**
     * Get the audit (Auditable) timestamps status.
     *
     * @return bool
     */
    public function getAuditTimestamps(): bool
    {
        // TODO: Implement getAuditTimestamps() method.
    }

    /**
     * Get the Audit Driver.
     *
     * @return string|null
     */
    public function getAuditDriver()
    {
        // TODO: Implement getAuditDriver() method.
    }

    /**
     * Get the Audit threshold.
     *
     * @return int
     */
    public function getAuditThreshold(): int
    {
        // TODO: Implement getAuditThreshold() method.
    }

    /**
     * Get the Attribute modifiers.
     *
     * @return array
     */
    public function getAttributeModifiers(): array
    {
        // TODO: Implement getAttributeModifiers() method.
    }

    /**
     * Transform the data before performing an audit.
     *
     * @param array $data
     *
     * @return array
     */
    public function transformAudit(array $data): array
    {
        // TODO: Implement transformAudit() method.
    }

    /**
     * Generate an array with the model tags.
     *
     * @return array
     */
    public function generateTags(): array
    {
        // TODO: Implement generateTags() method.
    }

    /**
     * Transition to another model state from an Audit.
     *
     * @param Audit $audit
     * @param bool $old
     *
     * @return Auditable
     * @throws \OwenIt\Auditing\Exceptions\AuditableTransitionException
     *
     */
    public function transitionTo(Audit $audit, bool $old = false): Auditable
    {
        // TODO: Implement transitionTo() method.
    }
}
