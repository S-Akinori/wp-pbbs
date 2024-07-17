import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit';
import Save from './save';
import './style.scss';

registerBlockType('mytheme/my-custom-block', {
    title: 'My Custom Block',
    icon: 'universal-access-alt',
    category: 'layout',
    edit: Edit,
    save: Save,
});
