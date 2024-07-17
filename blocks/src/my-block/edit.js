import { useBlockProps } from '@wordpress/block-editor';

const Edit = () => {
    const blockProps = useBlockProps();
    return (
        <div {...blockProps}>
            <p>Hello World, this is the editor view of my custom block!</p>
        </div>
    );
};

export default Edit;
