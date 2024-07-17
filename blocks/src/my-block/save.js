import { useBlockProps } from '@wordpress/block-editor';

const Save = () => {
    const blockProps = useBlockProps.save();
    return (
        <div {...blockProps}>
            <p>Hello World, this is the saved content of my custom block!</p>
        </div>
    );
};

export default Save;
