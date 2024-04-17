// (function () {
//     "use strict"

//     /* basic select2 */
//     $('.select2-single').select2();

//     /* multiple select */
//     $('.select2-multiple').select2();

//     /* single select with placeholder */
//     $(".select2-placeholder-single").select2({
//         placeholder: "Select one",
//         allowClear: true,
//         dir: "ltr"
//     });

//     /* multiple select with placeholder */
//     $(".select2-placeholder-multiple").select2({
//         placeholder: "Select one"
//     });

//     /* templating */
//     function formatState(state) {
//         if (!state.id) {
//             return state.text;
//         }
//         var baseUrl = "../assets/images/faces/select2";
//         var $state = $(
//             '<span><img alt="" src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.jpg" class="img-flag" > ' + state.text + '</span>'
//         );
//         return $state;
//     };
//     $(".select2-templating").select2({
//         templateResult: formatState,
//         placeholder: "Choose Customer"
//     });

//     /* with images */
//     function selectClient(client) {
//         if (!client.id) { return client.text; }
//         var $client = $(
//             '<span><img alt="" src="../assets/images/faces/select2/' + client.element.value.toLowerCase() + '.jpg" > '
//             + client.text + '</span>'
//         );
//         return $client;
//     };
//     $(".select2-client-search").select2({
//         templateResult: selectClient,
//         templateSelection: selectClient,
//         placeholder: "Choose Client",
//         escapeMarkup: function (m) { return m; }
//     });

//     /* max selections limiting */
//     $(".select2-multiple-limit-max").select2({
//         maximumSelectionLength: 3,
//         placeholder: "Choose Person",
//     });

//     /* Disablind select 2 controls */
//     $(".select2-disabled").select2();
//     $(".select2-disabled-multi").select2();

//     $(".js-programmatic-enable").on("click", function () {
//         $(".select2-disabled").prop("disabled", false);
//         $(".select2-disabled-multi").prop("disabled", false);
//     });
//     $(".js-programmatic-disable").on("click", function () {
//         $(".select2-disabled").prop("disabled", true);
//         $(".select2-disabled-multi").prop("disabled", true);
//     });

//     // /*  for rtl */
//     // document.querySelector("#switcher-rtl").addEventListener("click",()=>{
//     //     $('.select2-single').select2();
//     //     $(".select2-placeholder-single").select2({
//     //         placeholder: "Select a state",
//     //         allowClear: true,
//     //         dir: "rtl"
//     //     });


//     //     /* basic select2 */
//     // $('.select2-single').select2({
//     //     dir: "rtl"
//     // });

//     // /* multiple select */
//     // $('.select2-multiple').select2({
//     //     dir: "rtl"
//     // });

//     // /* single select with placeholder */
//     // $(".select2-placeholder-single").select2({
//     //     placeholder: "Select a state",
//     //     allowClear: true,
//     //     dir: "rtl"
//     // });

//     // /* multiple select with placeholder */
//     // $(".select2-placeholder-multiple").select2({
//     //     placeholder: "Select a state",
//     //     dir: "rtl"
//     // });

//     // /* templating */
//     // function formatState(state) {
//     //     if (!state.id) {
//     //         return state.text;
//     //     }
//     //     var baseUrl = "../assets/images/faces/select2";
//     //     var $state = $(
//     //         '<span><img alt="" src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.jpg" class="img-flag" > ' + state.text + '</span>'
//     //     );
//     //     return $state;
//     // };
//     // $(".select2-templating").select2({
//     //     templateResult: formatState,
//     //     placeholder: "Choose Customer",
//     //     dir: "rtl"
//     // });

//     // /* with images */
//     // function selectClient(client) {
//     //     if (!client.id) { return client.text; }
//     //     var $client = $(
//     //         '<span><img alt="" src="../assets/images/faces/select2/' + client.element.value.toLowerCase() + '.jpg" > '
//     //         + client.text + '</span>'
//     //     );
//     //     return $client;
//     // };
//     // $(".select2-client-search").select2({
//     //     templateResult: selectClient,
//     //     templateSelection: selectClient,
//     //     placeholder: "Choose Client",
//     //     dir: "rtl",
//     //     escapeMarkup: function (m) { return m; }
//     // });

//     // /* max selections limiting */
//     // $(".select2-multiple-limit-max").select2({
//     //     maximumSelectionLength: 3,
//     //     placeholder: "Choose Person",
//     //     dir: "rtl"
//     // });

//     // /* Disablind select 2 controls */
//     // $(".select2-disabled").select2({
//     //     dir: "rtl"
//     // });
//     // $(".select2-disabled-multi").select2({
//     //     dir: "rtl"
//     // });

//     // $(".js-programmatic-enable").on("click", function () {
//     //     $(".select2-disabled").prop("disabled", false);
//     //     $(".select2-disabled-multi").prop("disabled", false);
//     // });
//     // $(".js-programmatic-disable").on("click", function () {
//     //     $(".select2-disabled").prop("disabled", true);
//     //     $(".select2-disabled-multi").prop("disabled", true);
//     // });
//     // })
//     // /*  for ltr */
//     // document.querySelector("#switcher-ltr").addEventListener("click",()=>{
//     //     $('.select2-single').select2();
//     //     $(".select2-placeholder-single").select2({
//     //         placeholder: "Select a state",
//     //         allowClear: true,
//     //         dir: "ltr"
//     //     });


//     //     /* basic select2 */
//     // $('.select2-single').select2({
//     //     dir: "ltr"
//     // });

//     // /* multiple select */
//     // $('.select2-multiple').select2({
//     //     dir: "ltr"
//     // });

//     // /* single select with placeholder */
//     // $(".select2-placeholder-single").select2({
//     //     placeholder: "Select a state",
//     //     allowClear: true,
//     //     dir: "ltr"
//     // });

//     // /* multiple select with placeholder */
//     // $(".select2-placeholder-multiple").select2({
//     //     placeholder: "Select a state",
//     //     dir: "ltr"
//     // });

//     // /* templating */
//     // function formatState(state) {
//     //     if (!state.id) {
//     //         return state.text;
//     //     }
//     //     var baseUrl = "../assets/images/faces/select2";
//     //     var $state = $(
//     //         '<span><img alt="" src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.jpg" class="img-flag" > ' + state.text + '</span>'
//     //     );
//     //     return $state;
//     // };
//     // $(".select2-templating").select2({
//     //     templateResult: formatState,
//     //     placeholder: "Choose Customer",
//     //     dir: "ltr"
//     // });

//     // /* with images */
//     // function selectClient(client) {
//     //     if (!client.id) { return client.text; }
//     //     var $client = $(
//     //         '<span><img alt="" src="../assets/images/faces/select2/' + client.element.value.toLowerCase() + '.jpg" > '
//     //         + client.text + '</span>'
//     //     );
//     //     return $client;
//     // };
//     // $(".select2-client-search").select2({
//     //     templateResult: selectClient,
//     //     templateSelection: selectClient,
//     //     placeholder: "Choose Client",
//     //     dir: "ltr",
//     //     escapeMarkup: function (m) { return m; }
//     // });

//     // /* max selections limiting */
//     // $(".select2-multiple-limit-max").select2({
//     //     maximumSelectionLength: 3,
//     //     placeholder: "Choose Person",
//     //     dir: "ltr"
//     // });

//     // /* Disablind select 2 controls */
//     // $(".select2-disabled").select2({
//     //     dir: "ltr"
//     // });
//     // $(".select2-disabled-multi").select2({
//     //     dir: "ltr"
//     // });

//     // $(".js-programmatic-enable").on("click", function () {
//     //     $(".select2-disabled").prop("disabled", false);
//     //     $(".select2-disabled-multi").prop("disabled", false);
//     // });
//     // $(".js-programmatic-disable").on("click", function () {
//     //     $(".select2-disabled").prop("disabled", true);
//     //     $(".select2-disabled-multi").prop("disabled", true);
//     // });
//     // })

// })();