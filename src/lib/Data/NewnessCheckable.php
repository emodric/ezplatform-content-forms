<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace EzSystems\EzPlatformContentForms\Data;

interface NewnessCheckable
{
    /**
     * Whether the Data object can be considered new.
     *
     * @return bool
     */
    public function isNew();
}
