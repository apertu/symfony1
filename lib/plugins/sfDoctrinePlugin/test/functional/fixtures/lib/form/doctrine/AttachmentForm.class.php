<?php

/**
 * Attachment form.
 *
 * @author     Your name here
 */
class AttachmentForm extends BaseAttachmentForm
{
    public const TEST_GENERATED_FILENAME = 'test123';

    public function configure()
    {
        $this->widgetSchema['file_path'] = new sfWidgetFormInputFileEditable(array(
            'file_src' => sfConfig::get('sf_cache_dir').'/'.$this->getObject()->file_path,
            'edit_mode' => !$this->isNew(),
        ));
        $this->validatorSchema['file_path'] = new sfValidatorFile(array(
            'path' => sfConfig::get('sf_cache_dir'),
            'mime_type_guessers' => array(),
            'required' => false,
        ));
        $this->validatorSchema['file_path_delete'] = new sfValidatorBoolean();
    }

    protected function generateFilePathFilename()
    {
        return self::TEST_GENERATED_FILENAME;
    }
}
