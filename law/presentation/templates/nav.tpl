{* nav.tpl *}
<ul id="jsddm">
    <li><a href="{$obj->mSiteUrl}?view=ClaimExaminer">Claim Examiner</a>
        <ul>
            <li><a href="{$obj->mSiteUrl}?view=AddExaminer">Add a Claim Examiner</a></li>
            <li><a href="{$obj->mSiteUrl}?view=ClaimExaminer">View All Claim Examiners</a></li>           
        </ul>
    </li>
    <li><a href="{$obj->mSiteUrl}?view=CasesInfo">Case Information</a>
        <ul>
            <li><a href="{$obj->mSiteUrl}?view=AddCaseInfo">Add Case Information</a></li>
            <li><a href="{$obj->mSiteUrl}?view=CasesInfo">View Cases</a></li>          
        </ul>
    </li>
    <li><a href="{$obj->mSiteUrl}?view=LawFirms">Law Firms</a>
    	<ul>
            <li><a href="{$obj->mSiteUrl}?view=AddLawFirm">Add Law Firm</a></li>
            <li><a href="{$obj->mSiteUrl}?view=AssignFirm2Claim">Link Law Firm to Case</a></li>          
        </ul>
    </li>
    
    <li><a href="#">Views</a>
    	<ul>
            <li><a href="{$obj->mSiteUrl}?view=UpdatevInceptionCases">vInceptionCases</a></li>
            <li><a href="{$obj->mSiteUrl}?view=UpdatevMailMerge">vMailMerge</a></li>          
        </ul>
    </li>
    <li><a href="#">Help</a></li>
</ul>