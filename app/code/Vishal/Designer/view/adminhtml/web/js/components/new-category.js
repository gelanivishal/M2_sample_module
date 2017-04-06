/**
 * Vishal_Designer extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Sample
 * @package   Vishal_Designer
 * @copyright 2016 Vishal Gelani
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @author    Vishal Gelani
 */
define([
    'Vishal_Designer/js/components/new-tag'
], function (Select) {
    'use strict';

    return Select.extend({

        /**
         * Normalize option object.
         *
         * @param {Object} data - Option object.
         * @returns {Object}
         */
        parseData: function (data) {
            return {
                'is_active': data.model['is_active'],
                level: data.model['level'],
                value: data.model['category_id'],
                label: data.model['title'],
                parent: data.model['parent_id']
            };
        }
    });
});
