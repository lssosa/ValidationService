<?php

/*
 * Copyright (C) PowerOn Sistemas
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
namespace PowerOn\Validation;

use PowerOn\Utility\Lang;
/**
 * ValidatorException
 * @author Lucas Sosa
 * @version 0.1
 * @copyright (c) 2016, Lucas Sosa
 */
class ValidatorException extends \Exception {
    
    public function __construct($rule, $add_message = NULL) {
        Lang::configure(Lang::STRICT_MODE);
        Lang::load('validation', NULL, dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'langs');
        parent::__construct(Lang::get('validation.valid_' . $rule) . ($add_message ? ' ' . $add_message : ''));
    }
}
