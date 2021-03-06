{if $user}
  {assign var=module_title value=$slvn_info.label}
  {tikimodule title="$module_title" name="since_last_visit_new" flip=$module_params.flip decorations=$module_params.decorations}
    <table>
      <tr height="20">
        <td align="center">
	{if $feature_calendar eq 'y'}
          <a class="linkmodule" href="tiki-calendar.php?todate={$slvn_info.lastLogin}" title="{tr}click to edit{/tr}">
	{/if}
            <b>{$slvn_info.lastLogin|tiki_short_date}</b>
	{if $feature_calendar eq 'y'}
          </a>
	{/if}
        </td>
      </tr>
    </table>
	{if $slvn_info.cant == 0}
	      <div class="separator">
	      	{tr}Nothing has changed{/tr}
	      </div>
	{else}
	    {foreach key=pos item=slvn_item from=$slvn_info.items}
	     {if $slvn_item.count > 0 }
	      {assign var=cname value=$slvn_item.cname}
	      <div class="separator">
	        <a class="separator" href="javascript:toggle('{$cname}');">{$slvn_item.count}&nbsp;{$slvn_item.label}</a>
	      </div>
             {if $pos eq 'trackers' or $pos eq 'utrackers'}
             {foreach key=tp item=tracker from=$slvn_item.tid}
             {assign var=tcname value=$tracker.cname}
              <div id="{$cname}" class="separator" {if $smarty.cookies.$cname ne 'o'}style="display:none;"{else}style="display:block;"{/if}>
                 <a class="separator" href="javascript:toggle('{$tcname}');">&nbsp;{$tracker.count}&nbsp;{$tracker.label}</a>
                   <div id="{$tcname}" {if $smarty.cookies.$tcname ne 'o'}style="display:none;"{else}style="display:block;"{/if}>
                 <table cellpadding="0" cellspacing="0">
               {section name=xx loop=$tracker.list}
                   <tr class="module">
                     <td width="10"/>
                     <td width="20" align="right" class="module">&nbsp;{$smarty.section.xx.index_next})</td> 
                     <td>
                       <a  class="linkmodule"
                        href="{$tracker.list[xx].href|escape}"
                        title="{$tracker.list[xx].title|escape}">{if $tracker.list[xx].label == ''}-{else}{$tracker.list[xx].label|escape}{/if}</a>
                     </td>
                   </tr>
               {/section}
                 </table>
                </div>
              {/foreach}
               </div>
             {else}
	      <div id="{$cname}" {if $smarty.cookies.$cname ne 'o'}style="display:none;"{else}style="display:block;"{/if}>
	        <table cellpadding="0" cellspacing="0">
	          {section name=ix loop=$slvn_item.list}
	            <tr class="module">
	              <td width="10"/>
	              <td width="20" align="right" class="module">{$smarty.section.ix.index_next})</td>
	              <td>
	                <a  class="linkmodule" 
	                    href="{$slvn_item.list[ix].href|escape}"
	                    title="{$slvn_item.list[ix].title|escape}">
	                  {if $slvn_item.list[ix].label == ''}-{else}{$slvn_item.list[ix].label|escape}{/if}
	                </a>
	              </td>
	            </tr>
	          {/section}
	        </table>
             {/if}
	      </div>
	     {/if}
	    {/foreach}
    {/if}
  {/tikimodule}
{/if}
      
