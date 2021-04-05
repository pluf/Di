<?php
/*
 * Pluf, the light and fast PHP SaaS framework
 * Copyright (C) 2020 pluf.ir
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */
namespace Pluf\Di\Exception;

use Psr\Container\NotFoundExceptionInterface;
use InvalidArgumentException;

/**
 * An attempt to perform an operation that requires a service identifier was made.
 *
 * @author Mostafa Barmshory<mostafa.barmshory@gmail.com>
 */
class InvalidServiceIdentifierException extends InvalidArgumentException implements NotFoundExceptionInterface
{

    /**
     *
     * @param string $id
     *            The invalid identifier
     */
    public function __construct($id)
    {
        parent::__construct(sprintf('Identifier "%s" does not contain an object definition.', $id));
    }
}
