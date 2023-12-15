import {
  selectConf,
  listsMapping,
} from "../../../bazar/presentation/javascripts/form-edit-template/fields/commons/attributes.js";

window.formBuilderFields = window.formBuilderFields || {};

window.formBuilderFields.collaborativetools = {
  field: {
    label: "Outils collaboratifs",
    name: "collaborativetools",
    attrs: { type: "collaborativetools" },
    icon: '<i class="fas fa-users"></i>',
  },
  attributes: {
    ...selectConf,
    ...{
      queries: {
        label: _t("BAZ_FORM_EDIT_QUERIES_LABEL"),
        value: "",
        placeholder:
          "ex. : checkboxfiche6=PageTag ; cf. https://yeswiki.net/?LierFormulairesEntreEux",
      },
    },
  },
  advancedAttributes: ["read", "write", "semantic", "queries"],
  // disabledAttributes: [],
  attributesMapping: listsMapping,
  // renderInput(fieldData) {
  // },
  // renderInput(field) {
  //   return {
  //     field: "",
  //     onRender() {
  //       //renderHelper.defineLabelHintForGroup(field, 'auto_add_to_group', _t('BAZ_FORM_EDIT_ADD_TO_GROUP_HELP'))
  //     },
  //   };
  // },
};
