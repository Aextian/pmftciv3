import React, { PropsWithChildren } from "react";
import { FiAlignLeft } from "react-icons/fi";
interface Props {
    subMenus: {
        [key: string]: boolean;
    };
}

const Sidemenu: React.FC<Props> = ({ subMenus }) => {
    return (
        <>
            {subMenus["services"] && (
                <div className="bg-white border py-3 top-[80px] left-[80px] border-gray-200 rounded-lg shadow-2xl  h-screen w-[150px] fixed overflow-auto transition-all duration-300 ease-in-out  text-xs">
                    <ul className="flex flex-col justify-center items-center overflow-auto text-[10px]">
                        <li className="w-[100%]">
                            <a className=" hover:bg-cyan-600 border-b-2 flex justify-center items-center gap-2 px-2 py-1 rounded-lg" href="#">
                            <FiAlignLeft size={16} />Service 1
                            </a>
                        </li>
                        <li className="w-[100%]">
                            <a className=" hover:bg-cyan-600 border-b-2 flex justify-center items-center gap-2 px-2 py-1 rounded-lg" href="#">
                            <FiAlignLeft size={16} />Service 1
                            </a>
                        </li>
                    </ul>
                </div>
            )}

{subMenus["test1"] && (
                <div className="bg-white border py-3 top-[80px] left-[80px] border-gray-200 rounded-lg shadow-2xl  h-screen w-[150px] fixed overflow-auto transition-all duration-300 ease-in-out  text-xs">
                    <ul className="flex flex-col justify-center items-center overflow-auto text-[10px]">
                        <li className="w-[100%]">
                            <a className=" hover:bg-cyan-600 border-b-2 flex justify-center items-center gap-2 px-2 py-1 rounded-lg" href="#">
                            <FiAlignLeft size={16} />Service 1sdsd

                            </a>
                        </li>
                        <li className="w-[100%]">
                            <a className=" hover:bg-cyan-600 border-b-2 flex justify-center items-center gap-2 px-2 py-1 rounded-lg" href="#">
                            <FiAlignLeft size={16} />Service 1
                            </a>
                        </li>
                    </ul>
                </div>
            )}

{subMenus["test2"] && (
                <div className="bg-white border py-3 top-[80px] left-[80px] border-gray-200 rounded-lg shadow-2xl  h-screen w-[150px] fixed overflow-auto transition-all duration-300 ease-in-out  text-xs">
                    <ul className="flex flex-col justify-center items-center overflow-auto text-[10px]">
                        <li className="w-[100%]">
                            <a className=" hover:bg-cyan-600 border-b-2 flex justify-center items-center gap-2 px-2 py-1 rounded-lg" href="#">
                            <FiAlignLeft size={16} />Service 1

                            </a>
                        </li>
                        <li className="w-[100%]">
                            <a className=" hover:bg-cyan-600 border-b-2 flex justify-center items-center gap-2 px-2 py-1 rounded-lg" href="#">
                            <FiAlignLeft size={16} />Service 1
                            </a>
                        </li>
                    </ul>
                </div>
            )}

        </>
    );
};

export default Sidemenu;
