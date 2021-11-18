<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

<div class="ccms_box">
<div class="rendered-form">
    <div class="formbuilder-text form-group field-text-1636679496164">
        <label for="ccms_identification_number" class="formbuilder-text-label">Identification Number</label><small> - A unique and permanent number given to each collection item</small>
        <input type="text" class="form-control" name="ccms_identification_number" access="false" id="ccms_identification_number" title="A unique and permanent number given to each collection item" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_identification_number', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636679531855">
        <label for="ccms_item_type" class="formbuilder-text-label">Item Type</label><small> - A one or two word classification of the item in its simplest terms</small>
        <input type="text" class="form-control" name="ccms_item_type" access="false" id="ccms_item_type" title="A one or two word classification of the item in its simplest terms" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_item_type', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636679579807">
        <label for="ccms_item_name" class="formbuilder-text-label">Item Name</label><small> - A word or two providing descriptive information</small>
        <input type="text" class="form-control" name="ccms_item_name" access="false" id="ccms_item_name" title="A word or two providing descriptive information" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_item_name', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636679606748">
        <label for="ccms_item_title" class="formbuilder-text-label">Item Title</label><small> - The formal title given to the item by its creator</small>
        <input type="text" class="form-control" name="ccms_item_title" access="false" id="ccms_item_title" title="The formal title given to the item by its creator"  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_item_title', true ) ); ?>">
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680057778">
        <label for="ccms_description" class="formbuilder-textarea-label">Descripton</label><small> - A description of the item that includes all details that cannot be captured by digitisation alone</small>
        <textarea type="textarea" class="form-control" name="ccms_description" access="false" id="ccms_description" title="A description of the item that includes all details that cannot be captured by digitisation alone"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_description', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680101625">
        <label for="ccms_inscriptions" class="formbuilder-textarea-label">Inscriptions &amp; markings</label><small> - A verbatim recording of any serial numbers, signatures, text or other inscriptions and markings that are present on the item, including the details of the placement of the inscription</small>
        <textarea type="textarea" class="form-control" name="ccms_inscriptions" access="false" id="ccms_inscriptions" title="A verbatim recording of any serial numbers, signatures, text or other inscriptions and markings that are present on the item, including the details of the placement of the inscription"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_description', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-text form-group field-text-1636680211306">
        <label for="ccms_dimensions" class="formbuilder-text-label">Dimensions</label><small> - Accurate measurements of the item</small>
        <input type="text" class="form-control" name="ccms_dimensions" access="false" id="ccms_dimensions" title="Accurate measurements of the item" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_dimensions', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636680235925">
        <label for="ccms_production_method" class="formbuilder-text-label">Production Method</label><small> - The methods and techniques of how the item you are cataloguing was made</small>
        <input type="text" class="form-control" name="ccms_production_method" access="false" id="ccms_production_method" title="The methods and techniques of how the item you are cataloguing was made" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_production_method', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636680262612">
        <label for="ccms_production_material" class="formbuilder-text-label">Materials</label><small> - The materials that the item you are cataloguing is made or comprised of</small>
        <input type="text" class="form-control" name="ccms_production_material" access="false" id="ccms_production_material" title="The materials that the item you are cataloguing is made or comprised of" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_production_material', true ) ); ?>">
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680299685">
        <label for="ccms_context" class="formbuilder-textarea-label">Context or historical information
            <p style="margin-bottom: 0.8px; margin-left: 6.5px; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Calibri; color: rgb(12, 15, 25);"><b></b></label><small> - The story of the item, link it to relevant historical events, themes, people if known, or provide contextual information about the item</small></p>
        <textarea type="textarea" class="form-control" name="ccms_context" access="false" id="ccms_context" title="he story of the item, link it to relevant historical events, themes, people if known, or provide contextual information about the item"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_context', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680376760">
        <label for="ccms_statement" class="formbuilder-textarea-label">Statement of Significance
            <p style="margin-bottom: 0.8px; margin-left: 6.5px; font-stretch: normal; font-size: 11.5px; line-height: normal; font-family: Calibri; color: rgb(12, 15, 25);"><b></b><small> - A statement outlining the significance of the item, including why the item is significant and what significance criteria apply</small></p>
        <textarea type="textarea" class="form-control" name="ccms_statement" access="false" id="ccms_statement" title="A statement outlining the significance of the item, including why the item is significant and what significance criteria apply"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_statement', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-text form-group field-text-1636680446685">
        <label for="ccms_creator" class="formbuilder-text-label">Creator/Maker's details</label><small> - "The creator’s name and any other relevant details</small>
        <input type="text" class="form-control" name="ccms_creator" access="false" id="ccms_creator" title="The creator’s name and any other relevant details"  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_creator', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636680473977">
        <label for="ccms_where" class="formbuilder-text-label">Where created/made</label><small> - The place of manufacture or creation if it is known</small>
        <input type="text" class="form-control" name="ccms_where" access="false" id="ccms_where" title="The place of manufacture or creation if it is known" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_where', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636680504090">
        <label for="ccms_when" class="formbuilder-text-label">When made</label><small> - The date the item was created</small>
        <input type="text" class="form-control" name="ccms_when" access="false" id="ccms_when" title="The date the item was created" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_when', true ) ); ?>">
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680537869">
        <label for="ccms_provenance" class="formbuilder-textarea-label">Provenance events</label><small> - As a general rule, for each event, record when and where it took place and any additional event details</small>
        <textarea type="textarea" class="form-control" name="ccms_provenance" access="false" id="ccms_provenance" title="As a general rule, for each event, record when and where it took place and any additional event details"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_provenance', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680566794">
        <label for="ccms_acquisition" class="formbuilder-textarea-label">Acquisition</label><small> - How the item came to be in your organisation’s custody and the ownership status of the item</small>
        <textarea type="textarea" class="form-control" name="ccms_acquisition" access="false" id="ccms_acquisition" title="How the item came to be in your organisation’s custody and the ownership status of the item"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_acquisitions', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680589466">
        <label for="ccms_loans" class="formbuilder-textarea-label">Loans</label><small> - The details of any loan agreements pertaining to this item</small>
        <textarea type="textarea" class="form-control" name="ccms_loans" access="false" id="ccms_loans" title="The details of any loan agreements pertaining to this item"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_loans', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-text form-group field-text-1636680602338">
        <label for="ccms_condition" class="formbuilder-text-label">Condition</label><small> - A description of the condition of the item</small>
        <input type="text" class="form-control" name="ccms_condition" access="false" id="ccms_condition" title="A description of the condition of the item" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_identification_number', true ) ); ?>">
    </div>
    <div class="formbuilder-date form-group field-date-1636680699385">
        <label for="ccms_date" class="formbuilder-date-label">Condition report date</label><small> - The date of assessment</small>
        <input type="date" class="form-control" name="ccms_date" access="false" id="ccms_date" title="The date of assessment" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_date', true ) ); ?>">
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636680729904">
        <label for="ccms_risk" class="formbuilder-textarea-label">Risk</label><small> - The details of any risk assessments and what actions you might take to mitigate those risks</small>
        <textarea type="textarea" class="form-control" name="ccms_risk" access="false" id="ccms_risk" title="The details of any risk assessments and what actions you might take to mitigate those risks"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_risk', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-text form-group field-text-1636680758509">
        <label for="ccms_location" class="formbuilder-text-label">Location</label><small> - The detail of where the item is located regularly and/or its current location</small>
        <input type="text" class="form-control" name="ccms_location" access="false" id="ccms_location" title="The detail of where the item is located regularly and/or its current location" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_location', true ) ); ?>">
    </div>
    <div class="formbuilder-text form-group field-text-1636680998136">
        <label for="ccms_supplementary" class="formbuilder-text-label">Supplementary File</label><small> - The details and location of any relevant support documentation or supplementary files</small>
        <input type="text" class="form-control" name="ccms_supplementary" access="false" id="ccms_supplementary" title="The details and location of any relevant support documentation or supplementary files"  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_supplementary', true ) ); ?>">
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636681026249">
        <label for="ccms_restrictions" class="formbuilder-textarea-label">Restrictions</label><small> - The details of any access restrictions that apply to this item</small>
        <textarea type="textarea" class="form-control" name="ccms_restrictions" access="false" id="ccms_restrictions" title="The details of any access restrictions that apply to this item"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_identification_number', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-text form-group field-text-1636681096613">
        <label for="ccms_rights" class="formbuilder-text-label">Rights</label><small> - The details of any copyright or moral rights that apply to the item. For example, the name and contact detail of rights holder, the applicable copyright category and duration</small>
        <input type="text" class="form-control" name="ccms_rights" access="false" id="ccms_rights" title="The details of any copyright or moral rights that apply to the item. For example, the name and contact detail of rights holder, the applicable copyright category and duration" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_rights', true ) ); ?>">
    </div>
    <div class="formbuilder-textarea form-group field-textarea-1636681144848">
        <label for="ccms_note" class="formbuilder-textarea-label">Note</label><small> - This field provides a means to document any relevant information which is about the record itself rather than the item being catalogued">?</small>
        <textarea type="textarea" class="form-control" name="ccms_note" access="false" id="ccms_note" title="This field provides a means to document any relevant information which is about the record itself rather than the item being catalogued"><?php echo esc_attr( get_post_meta( get_the_ID(), 'ccms_note', true ) ); ?></textarea>
    </div>
    <div class="formbuilder-file form-group field-file-1636682915536">
        <label for="ccms_file" class="formbuilder-file-label">File Upload</label>
        <input type="file" class="form-control" name="ccms_file" access="false" multiple="false" id="ccms_file">
    </div>
</div>
</div>
