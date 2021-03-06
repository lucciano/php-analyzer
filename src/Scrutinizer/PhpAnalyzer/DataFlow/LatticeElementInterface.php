<?php

/*
 * Copyright 2013 Johannes M. Schmitt <johannes@scrutinizer-ci.com>
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Scrutinizer\PhpAnalyzer\DataFlow;

/**
 * Minimal interface required for data flow analysis.
 *
 * @author Johannes M. Schmitt <johannes@scrutinizer-ci.com>
 */
interface LatticeElementInterface
{
    /**
     * Compares two lattices for equality.
     *
     * This should perform a deep equality check by comparing the state of both objects, and must not be performed by
     * using referential equality.
     *
     * @param LatticeElementInterface $a
     *
     * @return boolean
     */
    function equals(LatticeElementInterface $a);
}