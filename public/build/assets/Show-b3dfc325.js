import{c,w as n,_ as p,o as s,a as i,e as o,b as t,f as r,F as l}from"./app-6be21289.js";import f from"./DeleteUserForm-73bcaeca.js";import u from"./LogoutOtherBrowserSessionsForm-45d313e6.js";import{S as a}from"./SectionBorder-8f66600f.js";import _ from"./TwoFactorAuthenticationForm-57ab6388.js";import d from"./UpdatePasswordForm-4869e04c.js";import h from"./UpdateProfileInformationForm-ed46a7a2.js";import"./DialogModal-4e54297b.js";import"./SectionTitle-60567723.js";import"./DangerButton-5ebd9cc0.js";import"./TextInput-d35db78e.js";import"./SecondaryButton-a22207d4.js";import"./ActionMessage-72e9b2a3.js";import"./PrimaryButton-206b40b0.js";import"./InputLabel-d82479bd.js";import"./FormSection-a5ca6252.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},I={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(s(),c(p,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(s(),o("div",w,[t(h,{user:e.$page.props.auth.user},null,8,["user"]),t(a)])):r("",!0),e.$page.props.jetstream.canUpdatePassword?(s(),o("div",k,[t(d,{class:"mt-10 sm:mt-0"}),t(a)])):r("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(s(),o("div",y,[t(_,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(a)])):r("",!0),t(u,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(s(),o(l,{key:3},[t(a),t(f,{class:"mt-10 sm:mt-0"})],64)):r("",!0)])])]),_:1}))}};export{I as default};